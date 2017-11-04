<?php

class Item_history extends DataMapper {
    
    var $table = "items_histories";
    var $has_one = ["item"];
    
    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    // 5. Z tabeli items_histories wyświetl item_id wierszy z retail_price = 1407.07
    public function exercise_5() {
        $obj = new Item_history();
        $obj->select("item_id");
        $obj->where("retail_price", 1407.07);
        $obj->get();
        $multi_obj_array = $obj->all_to_array();
        return $multi_obj_array;
    }

}

