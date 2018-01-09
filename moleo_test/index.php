<?php

echo "działa moleo <br/><br/>";

$handle = fopen("product.json", "r");

$jsonObject = json_decode(fgets($handle));

var_dump($jsonObject->quantity);





