<?php

interface Item {
    
    /* return product or variant id */
    public function getId();
    
    /* return netto value price field
     * VAT: 23% 
     */
    public function getNet();
    
}