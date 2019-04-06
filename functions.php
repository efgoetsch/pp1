<?php
/**
 * Ellen Goetsch
 * Date: 4/5/19
 */

//function which takes an array as a parameter
//prints each element of an array on a new line
function printArr($array)
{
    foreach($array as $arrayItem)
    {
        echo "$arrayItem <br>";
    }
}

//function which takes an array as a parameter
//returns the largest element in the array
function largest($array)
{
    $largest = 0;

    foreach($array as $arrayItem)
    {
        if($largest > $arrayItem)
        {
            continue;
        }
        else
        {
            $largest = $arrayItem;
        }
    }
    return $largest;
}