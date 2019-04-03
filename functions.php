<?php

function printArr($data)
{
    foreach ($data as $value)
    {
        echo $value;
        echo "<br>";
    }
}

function largest($arrayData)
{
    $max = $arrayData[0];

    foreach ($arrayData as $value)
    {
        if($value > $max)
        {
            $max = $value;
        }
    }
    return $max;
}