<?php


class Products extends ArrayIterator {

    // TODO clean this bordello...
    
    public $collectionContainItems = [];
    
    public function addProduct(Product $product) {
        $this->collectionContainItems[] = $product;
        return $this;
    }
    
    public function addProductVariation(ProductVariation $productVariation) {
        $this->collectionContainItems[] = $productVariation;
        return $this;
    }

}