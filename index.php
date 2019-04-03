<?php

include ('functions.php');

$numbers = array(7, 9, 8, 9, 8, 8, 6);

printArr($numbers);

$large = largest($numbers);
echo "Largest Number is: " . $large;

$avg = "<br>" . average($numbers);

echo "<br>" . "Average: " . $avg;

$newArray = removeDups($numbers);
foreach($newArray as $value)
{
   echo "<br>" . $value;
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 1</title>
</head>
<body>
    <header>Pair Program 1</header>

</body>
</html>
