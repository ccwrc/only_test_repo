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
    
    //6.Z tabeli items_histories wyś. item_id wierszy z retail_price > 1000 oraz mniejszych < 2500
    public function exercise_6() {
        $obj = new Item_history();
        $obj->select("item_id");
        $obj->where("retail_price >", 1000);
        $obj->where("retail_price <", 2500);
        $obj->get();
        $multi_obj_array = $obj->all_to_array();
        return $multi_obj_array;
    }
    
    // 7. Z tabeli items_histories wyświetl pierwsze 10 elementów posortowanych po polu date rosnąco
    public function exercise_7() {
        $obj = new Item_history();
        $obj->limit(10);
        $obj->order_by("date", "asc");
        $obj->get();
        $multi_obj_array = $obj->all_to_array();
        return $multi_obj_array;        
    }
    
}

