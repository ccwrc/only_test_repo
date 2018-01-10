<?php

function classLoader($className) {
    if(file_exists("class/" . $className . ".php")) {
        require_once "class/" . $className . ".php";
    }
}

spl_autoload_register("classLoader");

echo "moleo <hr/>";

$prodVar = new ProductVariation("product.json", "szarny");
$prod = new Product("product.json");

//var_dump(Basic::generateRandomItems(5));

//Basic::showItems("ID2018011017401730285");

var_dump(Basic::deleteProducts("ID201801101746292977"));
