<?php


class ProductVariation extends Product {
    private $color;
    
//    public function __construct($fileName, $color) {
//        parent::
//        if (!is_string($color) || $color == null) {
//            throw new UndefinedVariantColor("plain exception message for und. var. color...");
//        }
//        $this->color = $color;
//    }
    
    public function __construct($fileName, $color) {
        parent::__construct($fileName);
        
        if (!is_string($color) || $color == null) {
            throw new UndefinedVariantColor("plain exception message for und. var. color...");
        }
        $this->color = $color;
    }

}