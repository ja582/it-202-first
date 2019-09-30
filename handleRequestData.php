<?php
#turn error reporting on
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo "<pre>" . var_export($_GET, true) . "</pre>";

if(isset($_GET['name'])){
    echo "<br>Hello, " . $_GET['name'] . "<br>";
}
if(isset($_GET['number'])){
    $number = $_GET['number'];
    echo "<br>" . $number . " should be a number...";
    echo "<br>but it might not be<br>";

}

echo "<br>";
if(isset($_GET['number2'])){
    $number2 = $_GET['number2'];
    echo "<br>" . $number2 . " should be a number...";
    echo "<br>but it might not be<br>";
}
echo "<br>";

if(is_numeric($number) && is_numeric($number2)){
    echo $number + $number2;
} else{
    echo "number1 and number2 are not numbers. will not add them up.";
}

$combined = $number2.$number;
echo "<br>";
echo "Concentating two values: " . $combined;


?>