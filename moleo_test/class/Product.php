<?php

class Product {
    public $id;
    public $name;
    public $price;
    public $quantity;
    private $amount = null;

    public function __construct($fileName) {
        if (!file_exists($fileName)) {
            throw new ProductFileNotFound("plain exception message for product file...");
        }

        $handle = fopen($fileName, "r");
        $jsonObject = json_decode(fgets($handle));

        $this->id = $jsonObject->id;
        $this->name = $jsonObject->name;
        $this->price = $jsonObject->price;
        $this->quantity = $jsonObject->quantity;
    }
    
    public function getAmount() {
        if ($this->amount === null) {
            $this->amount = $this->price * $this->quantity;
        }
        return $this->amount;
    }

	public function __get($name) {
        // TODO pole: wartosc pola... wtf?
        return (isset($this->$name) ? $this->$name : null);
    }

}
