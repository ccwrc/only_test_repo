<?php

function classLoader($className) {
    if(file_exists("class/" . $className . ".php")) {
        require_once "class/" . $className . ".php";
    }
}

spl_autoload_register("classLoader");



echo "działa moleo <br/><br/>";

$prodVar = new ProductVariation("product.json", "szarny");
//var_dump($prodVar->getNet());



$prod = new Product("product.json");
//var_dump($prod->getNet());


//$prod2 = new Product("product.json");
//$arrProd = new Products();
//$arrProd->addProduct($prod);
//$arrProd->addProductVariation($prodVar)->addProduct($prod2);
//var_dump($arrProd->collectionContainItems);

Basic::generateRandomItems(6);
