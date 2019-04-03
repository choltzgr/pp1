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

function average($arrayData)
{
    $total = 0;
    foreach($arrayData as $value)
    {
        $total = $total + $value;
    }

    $average = $total / count($arrayData);

    return $average;

}

function removeDups($arrayData)
{
    sort($arrayData);

    for ($i = count($arrayData); $i > 0; $i--)
    {
        if($arrayData[$i] == $arrayData[$i - 1])
        {
            unset($arrayData[$i]);
        }
    }

    return $arrayData;
}

function distribution($arrayData)
{
    sort($arrayData);
    $newArray = [];

    foreach($arrayData as $value)
    {
        if(array_key_exists($value, $newArray))
        {
            $newArray[$value]++;
        }
        else
        {
            $newArray[$value] = 1;
        }
    }

    //sort($newArray);

   // var_dump($newArray);
    return $newArray;
}