<?php

class Item_history extends DataMapper {
    
    var $table = "items_histories";
    
    public function __construct($id = NULL) {
        parent::__construct($id);
    }
}

