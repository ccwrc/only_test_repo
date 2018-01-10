<?php

class Product implements Item {
    private $id;
    private $name;
    private $price;
    private $quantity;
    private $amount = null;


    public function __construct($fileName) {
        if (!file_exists($fileName)) {
            throw new ProductFileNotFound("plain exception message for product file not found...");
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
        if (isset($this->$name)) {
            foreach (get_object_vars($this) as $key => $value) {
                if (get_object_vars($this)[$name] === $value) {
                    return $key . ": " . $value;
                }
            }
        }
        return null;
    }
    
    // (Start) Item interface methods
    public function getId() {
        return $this->id;
    }

    public function getNet() {
        return $this->price * 0.77;
    }
    // (End) Item interface methods

}
