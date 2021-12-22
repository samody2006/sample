<?php

class Calculator {

private $x, $y;

public function __construct( $x, $y ) {
$this->x = $x;
$this->y = $y;
}

public function add() {
return $this->x + $this->y;
}
public function subtract() {
return $this->x - $this->y;
}

public function multiply() {
return $this->x * $this->y;
}

public function divide() {
return $this->x / $this->y;
}

}
$mycalc = new Calculator(12, 6); 
echo $mycalc-> add()."\n"; 
echo $mycalc-> multiply()."\n"; 
echo $mycalc-> subtract()."\n"; 
echo $mycalc-> divide()."\n"; 
?>