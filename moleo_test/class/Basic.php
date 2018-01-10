<?php

class Basic {
    private static $permittedColorsAndNull = [
        "red",
        "green",
        "blue",
        "white",
        "black",
        null
    ];
    
    public static function generateRandomItems($numberRandProducts) {
        $products = new Products();

        for ($i = 1; $i <= $numberRandProducts; $i++) {
            if ($i % 2 == 0) { // ProductVariation
                try {
                    $productVariation = Basic::generateProductVariationObject();
                    $products->addProductVariation($productVariation);
                } catch (UndefinedVariantColor $e) {
                    echo $e->getMessage() . "Color null generated - ProductVariation not created";
                }
            } else { // Product
                $product = Basic::generateProductObject();
                $products->addProduct($product);
            }
        }
        //TODO $products to json file
        var_dump($products);
    }

    private static function generateProductObject() {
        //TODO generate temporary random files inc. json
        return new Product("product.json");
    }

    private static function generateProductVariationObject() {
        //TODO generate temporary random files inc. json
        $randomColorOrNull = self::$permittedColorsAndNull[array_rand(self::$permittedColorsAndNull)];
        return new ProductVariation("product.json", $randomColorOrNull);
    }

}