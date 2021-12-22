<?php
require('sample1.php');

class ClassB {

    public $name = 'Segun';

    public function getName(){
        return $this->name;
    }

    public function callSampleA(){
        $a = new ClassA();
        return $a->getName();
    }

    public static function callAStatic(){
        $a = new ClassA();
        return $a->getName();
    }

}

$b = new ClassB();
echo $b->callSampleA()."\n"; 
echo $b->getName()."\n"; 
echo ClassB::callAStatic();