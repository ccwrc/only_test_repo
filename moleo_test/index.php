<?php

function classLoader($className) {
    if (file_exists("class/" . $className . ".php")) {
        require_once "class/" . $className . ".php";
    } else {
        throw new Exception();
    }
}

spl_autoload_register("classLoader");

/* create products (include ProductVariation) */
// Basic::generateRandomItems(8);

/* show products from a single file */
//Basic::showItems("ID2018011111324330614");

/* testing file removal */
//var_dump(Basic::deleteProducts("ID2018011017401950124"));
/* testing file removal inc. info */
//if (!Basic::deleteProducts("ID2018011017402078455")) {
//    echo "products del";
//} else {
//    echo "file not exists";
//}

/* display all content from products dir */
foreach (new DirectoryIterator('products') as $fileInfo) {
    if ($fileInfo->isFile()) {
        echo $fileInfo->getFilename() . " ******* <br/>";
        $fileName = explode(".", $fileInfo->getFilename());
        $onlyFileId = $fileName[0];  // longer but more readable
        Basic::showItems($onlyFileId);
    }
}

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