<?php

class Item extends DataMapper {

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // 1. wyświetl z tabeli items dane produktu o id = 4
    public function exercise_1() {
        // sposób 1
//        $obj = new Item();
//        $obj->get_by_id(4);
//        $singleObjArray = $obj->to_array();
//        return $singleObjArray;
//        
        // sposób 2
//        $obj = new Item(4);
//        $single_obj_array = $obj->to_array();
//        return $single_obj_array;
        
        // sposób 3
        $obj = new Item();
        $obj->where("id", 4);
        $obj->get();
        $single_obj_array = $obj->to_array();
        return $single_obj_array;        
    }
    
    // 2. wyświetl z tabeli items dane produktu o name_raw = 'Lorax'

}
