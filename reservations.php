<?php

$pricingOptions = [
    ['service' => 'Basic Cleaning', 'price' => '50€'],
    ['service' => 'Deep Cleaning', 'price' => '100€'],
    ['service' => 'Premium Cleaning', 'price' => '150€']
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date = $_POST['date'] ?? '';
    
    if ($date == '2025-02-30') { 
        echo "<p style='color: red;'>Date is not correct</p>";
    } else {
        echo "<p style='color: green;'>Reservation is made for this date: $date</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pricing & Reservation</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Pricing Options</h2>
<table>
    <tr>
        <th>Service</th>
        <th>Price</th>
    </tr>
    <?php foreach ($pricingOptions as $option): ?>
        <tr>
            <td><?php echo htmlspecialchars($option['service']); ?></td>
            <td><?php echo htmlspecialchars($option['price']); ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h2>Make a Reservation</h2>
<form method="post">
    <label for="date">Choose date:</label>
    <input type="date" id="date" name="date" required>
    <button type="submit">Confirm reservation</button>
</form>

</body>
</html>
