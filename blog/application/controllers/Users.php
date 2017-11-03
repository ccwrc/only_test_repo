<?php

class Users extends CI_Controller {
    
    function index() {
        // echo "test users echo";
        $testUser = new User();
        $testUser->get_by_id(1)->to_array();
        //var_dump($testUser);
        echo $testUser->username;
    }
}
