<?php
require('multiplyCon.php');

class Calculator {

    public $x = '5';
 
    
    public function showX(){
        return $this->x;
    }

    public function constant(){
        $y = new multiplier();
        return $y->multiply();
    }

   

       
}


$b = new Calculator();

echo $b->showX()."\n"; 
echo $b->constant()."\n"; 
echo $b->constant() * ('599')."\n"; 
