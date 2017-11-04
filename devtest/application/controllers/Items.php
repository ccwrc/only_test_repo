<?php

class Items extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Item");
        $this->load->model("Item_history");
    }

    public function index() {
        //echo "Items (only) controller test echo";
        
        // var_dump($this->Item->exercise_1());
        // var_dump($this->Item->exercise_2());
        // var_dump($this->Item->exercise_3());
        // var_dump($this->Item->exercise_4());
        // var_dump($this->Item_history->exercise_5());
        var_dump($this->Item_history->exercise_6());
    }
    
}
