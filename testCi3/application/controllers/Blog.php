<?php

class Blog extends CI_Controller {

    public function index() {
        //index - load by default //http://localhost/only_test_repo/testCi3/index.php/blog
        // or http://localhost/only_test_repo/testCi3/index.php/blog/index
        echo "Hello Blog controller! (function index)";
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
        } else {
            show_404();
        }
    }

    private function _prv() {
        echo "private function";
    }

}
