<?php

class Blog extends CI_Controller {
    
    public function __construct() {
        parent::__construct(); //parent required !
        // and your own code
    }

    public function index() {
        //index - load by default //http://localhost/only_test_repo/testCi3/index.php/blog
        // or http://localhost/only_test_repo/testCi3/index.php/blog/index
        // var_dump(get_config()); exit;
        // var_dump(get_instance()); exit;
        // var_dump(SELF); exit;
        // echo "Hello Blog controller! (function index)";
        // $data["page_title"] = "new title from data";
        $data = [
            "page_title" => "new page title from data",
            "message" => "message from data"
        ];
        $data["todo_list"] = [
            "todo1", "todo2", "todo3", "todo4"
            ];
        $this->load->view("blog/blog_view", $data);
        $this->load->view("test_menu_view");
    }

    public function comments() { // http://localhost/only_test_repo/testCi3/index.php/blog/comments
        echo "public function comments in Blog controller";
    }

    public function _remap($method) { // routing - god mode
        if ($method === "testRemap") {
            echo "_remap routing work (testRemap)";
        } elseif ($method === "index") {
            $this->index();
        } elseif ($method === "comments") {
            $this->comments();
        } elseif ($method === "private") {
            $this->_prv();
        } elseif ($method === "model_test") {
            $this->model_test();
        } else {
            show_404();
        }
    }

    private function _prv() { // _(underscore) + private - never show on basic routing
        echo "private function";
    }
    
    public function model_test() {
        // $this->load->model("Blog_model");  //autoload on
        $data["query"] = $this->Blog_model->get_two_blog();
        // var_dump($data); exit;
        $this->load->view("blog/model_test_view", $data);
    }

}
