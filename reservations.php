<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date = $_POST['date'] ?? '';
    
    if ($date == '2025-02-30') { 
        echo "Date is not correct";
    } else {
        echo "Reservation is made for this date: $date";
    }
}
?>

<form method="post">
    <label for="date">Choose date:</label>
    <input type="date" id="date" name="date" required>
    <button type="submit">Confirm reservation</button>
</form>
