<?php
init_set('display_errors', 1);
init_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'functions.php';

$numbers = array(7, 9, 8, 9, 8, 8, 6);

printArr($numbers);

$large = largest($numbers);
var_dump($large);
echo $large;
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
