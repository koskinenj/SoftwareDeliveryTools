<?php

$pricingOptions = [
    ['service' => 'Basic Cleaning', 'price' => '50€'],
    ['service' => 'Deep Cleaning', 'price' => '100€'],
    ['service' => 'Premium Cleaning', 'price' => '150€']
];

$reservationsFile = 'reservations.txt';
$reservedDates = file_exists($reservationsFile) ? file($reservationsFile, FILE_IGNORE_NEW_LINES) : [];

$successMessage = '';
$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date = $_POST['date'] ?? '';

    if (in_array($date, $reservedDates)) {
        $errorMessage = "Date $date is already reserved.";
    } else {
        file_put_contents($reservationsFile, $date . PHP_EOL, FILE_APPEND);
        $successMessage = "Reservation is made for this date: $date";
        $reservedDates[] = $date;
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
        .reserved-dates {
            margin-top: 20px;
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

<?php if ($successMessage): ?>
    <p style="color: green;"><?php echo $successMessage; ?></p>
<?php elseif ($errorMessage): ?>
    <p style="color: red;"><?php echo $errorMessage; ?></p>
<?php endif; ?>

<form method="post">
    <label for="date">Choose date:</label>
    <input type="date" id="date" name="date" required>
    <button type="submit">Confirm reservation</button>
</form>

<h2>Reserved Dates</h2>
<div class="reserved-dates">
    <?php if (count($reservedDates) > 0): ?>
        <ul>
            <?php foreach ($reservedDates as $reservedDate): ?>
                <li><?php echo htmlspecialchars($reservedDate); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No reservations yet.</p>
    <?php endif; ?>
</div>

</body>
</html>

