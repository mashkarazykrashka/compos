<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title><Calculator></title>
</head>

<body>
<?php

use App\Calculator;

require "../vendor/autoload.php";

$obj = new Calculator(); 

$result = "";

if(isset($_POST))
{   
    $result = $obj->getResult($_POST['x'],$_POST['y'],$_POST['operator']);
    echo $result;
}
?>

<div class="formPosition">
    <h2 style="text-align:center">Calculator</h2>

    <form action="" method="post" class="feedback">

        Enter 1st Number
        <input type="number" name="x" class="name"><br>
        Enter 2st Number
        <input type="number" name="y" class="name"><br>
        Select Operator
        <select name="operator" class="name">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="^2">^2</option>
            <option value="^3">^3</option>
            <option value="^y">^y</option>
            <option value="V2">V2</option>
            <option value="V3">V3</option>
            <option value="Vy">Vy</option>

        </select>
        <input type="submit" value="Сalculate" class="button">
    </form>

</div>