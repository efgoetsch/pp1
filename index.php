<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pair Program 1</title>
</head>
<body>
<header>Pair Program 1</header>

<?php

    $numbers = array(7, 9, 8, 9, 8, 8, 6);

    

    function printArr($numbers)
    {
        foreach($numbers as $number)
        {
            echo "$number <br>";
        }
    }

    printArr($numbers);

?>

</body>
</html>