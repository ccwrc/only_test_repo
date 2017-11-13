<?php

class Item extends DataMapper {
    
    var $has_one = ["item_history"];

    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    public function exercise_test() {
        $obj = new Item();
        
        $obj->get();
        $arr = $obj->all_to_single_array("name");

        return $arr;
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
    
    // 9. wyświetl name_raw z tabeli items produktów, które w historii posiadają date = 2016-10-10
    public function exercise_9() {
        $obj = new Item();
        $obj->select("name_raw, id");
        $obj->where_related("item_history", "date", "2016-10-10");
        $obj->get();
        $multi_obj_array = $obj->all_to_array();
        return $multi_obj_array;        
    }
    
    // 10. zmień nazwę produktu o id = 6 na name_raw = 'nowa nazwa'
    public function exercise_10() {
        $obj = new Item();
        $obj->get_by_id(6);
        $obj->name_raw = "nowa nazwa";
        if($obj->save()) {
            return TRUE;
        }
        return FALSE;
    }
    
    // 11. usuń produkt o nazwie "Nabe vorn" oraz usuń jego całą historię.
    public function exercise_11() {
        $obj = new Item();
        $obj->get_by_name("Nabe vorn");
        
        $obj_related = new Item_history();
        $obj_related->where_related($obj)->get();
        
        $infoString = "";
        
        if($obj->delete()) {
            $infoString .= "item wykasowany ";
        } else {
            $infoString .= "item nie istnieje ";
        }
        
        if($obj_related->delete()) {
            $infoString .= "item_history wykasowany ";
        } else {
            $infoString .= "item_history nie istnieje ";
        }        
        
        return $infoString;
    }    

}
