<?php

class Products extends CI_Controller
{
    public function shoes($sandals, $id)
    { // http://localhost/only_test_repo/testCi3/index.php/products/shoes/paramSandals/paramId
        echo $sandals . " + " . $id;
    }
}

