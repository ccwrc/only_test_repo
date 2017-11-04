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
    public function exercise_2() {
        $obj = new Item();
        $obj->where("name_raw", "Lorax");
        $obj->get();
        $single_obj_array = $obj->to_array();
        $counter = $obj->result_count();
        $multi_obj_array = $obj->all_to_array();
        return $single_obj_array;   
        // return $counter;
        // return $multi_obj_array;
    }
    
    // 3. wyświetl listę produktów o name_raw rozpoczynającej się od 'MC92N0'
    public function exercise_3() {
        $obj = new Item();
        $obj->like("name_raw", "MC92N0", "after");
        $obj->get();
        $multi_obj_array = $obj->all_to_array();
        return $multi_obj_array;
    }
    
    // 4. wyświetl ilość produktów, których name_raw  zaczyna się od 'Lorax'
    public function exercise_4() {
        $obj = new Item();
        $obj->like("name_raw", "Lorax", "after");
        $obj->get();
        $counter = $obj->result_count();
        return $counter;
    }
    

}
