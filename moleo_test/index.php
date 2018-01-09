<?php

function classLoader($className) {
    if(file_exists("class/" . $className . ".php")) {
        require_once "class/" . $className . ".php";
    }
}

spl_autoload_register("classLoader");

echo "działa moleo <br/><br/>";

//$handle = fopen("product.json", "r");
//
//$jsonObject = json_decode(fgets($handle));
//
//var_dump($jsonObject->quantity);

$prod = new Product("product.json");

echo $prod->name;





