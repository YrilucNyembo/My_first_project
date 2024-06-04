<?php

$rate= 25;
$hours= 70;
$holidays_hours= 2;
$overtime_trheshold= 40;

$regular_hours = min($hours, $overtime_trheshold);
$overtime_hours = max(0, $hours - $overtime_trheshold);
$weekend_hours = $holidays_hours;

$first_overtime_hours = min( $overtime_hours, 6);
$additional_overtime_hours = max( 0, $overtime_hours - 6);

$regular_pay = $regular_hours = $rate;
$first_overtime_pay = $first_overtime_hours * $rate * 1.5;
$weekend_pay = $weekend_hours * $rate * 2;

total = $regular_pay + $first_overtime_pay + $additional_overtime_pay + $weekend_pay;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary</title>
</head>
<body>
    <h1>Salary</h1>
    <form method = "post" action ="travail.php" >
        <label for= "rate">Hourly rate :</label>
        <input type = "numbero" id = "rate " name = "rate" step="0.01" require><br><br>
        

    
</body>
</html>