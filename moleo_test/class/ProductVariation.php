<?php


class ProductVariation extends Product {
    private $color;
    
    public function __construct($fileName, $color) {
        parent::__construct($fileName);
        
        if (!is_string($color) || $color == null) {
            throw new UndefinedVariantColor("Exception message - undefined color variant.");
        }
        $this->color = $color;
    }
      

}