<?php

class Blog_model extends CI_Model {

    var $id = "";
    var $content = "";
    var $author = "";

    function __construct() {
        parent::__construct();
    }
    
    function get_all_blog() {
        $query = $this->db->get("blog");
        return $query->result();
    }

}
