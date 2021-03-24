<?php

$arrColor = array(
    "orange" => 1,
    "black" => 2,
    "red" => 3 ,
    "blue" => 4,
    "green" => 5,
    "purple" => 6,
    "yellow" => 7,
    "aqua" => 8,
    "aquamarin" =>9,
    "pink" => 10

);

$arrVeget = array(
    "apple" =>1,
    "avocado" =>2,
    "banana" =>3,
    "fig" => 4,
    "grapes" =>5,
    "kiwi" => 6,
    "lime" =>7,
    "mango" =>8,
    "lemon" =>9,
    "grapefruit" =>10
);

$arrNut = array(
  "almond" =>1,
  "cashew" =>2,
  "chestnut" =>3,
  "hazelnut" =>4,
  "nutmeg" =>5,
  "peanut" =>6,
  "pine nut" =>7,
  "pistachio" =>8,
  "walnut" =>9,
  "meg" =>10
);

function createList ($arr) {
    foreach ($arr as $key => $value){
        echo '<li class="list_item">'.$key . ':'.$value.'<li>';
    }
}
?>

<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="flex-block">
    <ul class="listColor">
        <?php createList($arrColor); ?>
    </ul>

    <ul class="listVeget">
        <?php
        createList($arrNut);?>
    </ul>

    <ul class="listNut">
        <?php createList($arrVeget); ?>
    </ul>


</div>


</body>
</html>