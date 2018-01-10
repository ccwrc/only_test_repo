<?php

class Products extends ArrayIterator implements JsonSerializable {
    public $collectionContainItems = [];

    // TODO clean this bordello...

    public function addProduct(Product $product) {
        $this->collectionContainItems[] = $product;
        return $this;
    }

    public function addProductVariation(ProductVariation $productVariation) {
        $this->collectionContainItems[] = $productVariation;
        return $this;
    }

    // (Start) implementation JsonSerializable
    public function jsonSerialize() {
        //TODO improve this implementation
        return $this->collectionContainItems;
    }
    // (End) implementation JsonSerializable
    
}
