<?php

class Product {
    public $id;
    public $name;
    public $price;
    public $quantity;
    
    public function __construct($fileName) {
        // TODO rzucić wyjątkiem jesli to niewlasciwy plik
        $handle = fopen($fileName, "r");
        $jsonObject = json_decode(fgets($handle));
        
        $this->id = $jsonObject->id;
        $this->name = $jsonObject->name;
        $this->price = $jsonObject->price;
        $this->quantity = $jsonObject->quantity;
    }
}