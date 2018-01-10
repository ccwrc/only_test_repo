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
        //TODO $products fix import to json file
        $serializedProducts = serialize($products); //reverse: unserialize

        $uniqueFileId = "ID" . date("YmdHis") . mt_rand(0, 99999);
        $jsonFile = fopen("products/$uniqueFileId.json", 'w');
        fwrite($jsonFile, $serializedProducts);
        fclose($jsonFile);

        return $uniqueFileId;
    }
    
    /* example of use:  Basic::showItems("ID2019011117402267605"); */
    public static function showItems($onlyFileId) {
        if (!file_exists("products/$onlyFileId.json")) {
            $onlyFileId = Basic::generateRandomItems(20);
        }
        $handle = fopen("products/$onlyFileId.json", "r");
        $products = unserialize(fgets($handle));

        echo "<pre>";
        foreach ($products->collectionContainItems as $object) {
            print_r($object);
            // or 'magic'...
//            echo $object->id;
//            echo $object->name;
//            echo $object->price;
//            echo $object->quantity;
        }
        echo "</pre>";
    }

    // (Start) helpers
    private static function generateProductObject() {
        //TODO generate temporary random files inc. json
        return new Product("product.json");
    }

    private static function generateProductVariationObject() {
        //TODO generate temporary random files inc. json
        $randomColorOrNull = self::$permittedColorsAndNull[array_rand(self::$permittedColorsAndNull)];
        return new ProductVariation("product.json", $randomColorOrNull);
    }
    // (End) helpers

}