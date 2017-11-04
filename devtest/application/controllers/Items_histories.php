<?php

class Items_histories extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Item_history");
    }

    public function index() {
        echo "Items_histories controller test echo";
    }
    
}
