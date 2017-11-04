<?php

class Items extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Item");
    }

    public function index() {
        //echo "Items (only) controller test echo";
        // var_dump($this->Item->exercise_1());
        var_dump($this->Item->exercise_2());
    }
    
}
