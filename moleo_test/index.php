<?php

function classLoader($className) {
    if(file_exists("class/" . $className . ".php")) {
        require_once "class/" . $className . ".php";
    }
}

spl_autoload_register("classLoader");



echo "działa moleo <br/><br/>";

$prodVar = new ProductVariation("product.json", "szarny");

var_dump($prodVar);

echo $prodVar->getAmount();





