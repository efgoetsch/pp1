<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pair Program 1</title>
</head>
<body>
<header>Pair Program 1</header>

<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    //Includes the file that defines the functions used on this page
    include("functions.php");

    $numbers = array(7, 9, 8, 9, 8, 8, 6);

    printArr($numbers);

?>

</body>
</html>