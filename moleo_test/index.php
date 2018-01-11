<?php

function classLoader($className) {
    if (file_exists("class/" . $className . ".php")) {
        require_once "class/" . $className . ".php";
    } else if (!file_exists("class/" . $className . ".php")) {
        throw new Exception();
    }
}

spl_autoload_register("classLoader");


//echo "moleo_test_client <hr/>";

/* create products (include ProductVariation) */
// Basic::generateRandomItems(8);

/* show products from a single file */
Basic::showItems("ID2018011111324330614");

/* testing file removal */
//var_dump(Basic::deleteProducts("ID2018011017401950124"));
//if (!Basic::deleteProducts("ID2018011017402078455")) {
//    echo "products del";
//} else {
//    echo "file not exists";
//}


/* console
 * php -h
 * php -f index.php // php index.php
 * php -r "require 'index.php'; Basic::generateRandomItems(11);"
 */



/* product + ProductVariation instance creation test */
//$product = new Product("product.json");
//$productVariation = new ProductVariation("product.json", "żółtośliwkowoszary");
//$productVariation = new ProductVariation("product.json", 3);
//var_dump($product);
//var_dump($productVariation);