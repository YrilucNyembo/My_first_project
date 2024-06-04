<?php

if($_SERVER[" REQUEST_METHOD"]==" POST "){

    $first_value = $_POST['first_value'];
    $operation = $_POST['operation'];
    $second_value = $_POST['second_value'];

    if (is_numeric($first_value) && is_numeric($second_value)){
        $first_value = floatval($first_value);
        $second_value = floatval($second_value);

        switch(operation) {
            case '+' :
                $resultat = $first_value + $second_value;
                break;
            case '-':
                $resultat = $first_value - $second_value;
                break;
            case '*':
                $resultat = $first_value * $second_value;
                break;
            case '/':
                if ($second_value != 0){
                    $resultat = $first_value / $second_value;     
                }else {
                $resultat = " Error !! Dision par zero"
            }
               break;

        }
        echo "$resultat"
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>
    <h1> Calculatrice </h1>
    <form method = "post">
        <label for = " First_value">first_value</label>
        <input type = " text" id = " First_value " name = "First_value"require>
        <br>
        <label for = " Operation">Operation(+,-,*,/):</label>
        <input type = " Operation " id = " Operation" name = "Operation" require>
        <br>
        <label for = " second_value ">second_value</label>
        <input type = " Second_value " id = "Second_value" name = " Second_value" require>
        <br>
        <input type ="submit" value = " calculer">
</form>

</body>
</html>
