<?php

class Item_history extends DataMapper {
    
    var $table = "items_histories";
    var $has_one = ["item"];
    
    public function __construct($id = NULL) {
        parent::__construct($id);
    }
}

