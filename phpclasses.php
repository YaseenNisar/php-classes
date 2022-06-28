<?php
class calculation{
  //define properties and methods both here
  // public access modifier. can use these variables as objects out of the classes as well
  public $a,$b, $c ; //properties and none other than these variables can be use in it
  function sum(){ //methods
    $this->c= $this->a+$this->b;
    return $this->c;
  }
  function sub(){ //methods
    $this->c= $this->a-$this->b;
    return $this->c;
  }
}
//u can create as many classes as u want
//now create an object (c1 is an object)
  $c1= new calculation();
  $c1->a=10;
  $c1->b=5;

  $c2= new calculation();
  $c2->a=50;
  $c2->b=30;

  echo $c1->sum() ."<br>";
  echo $c2->sub();

?>