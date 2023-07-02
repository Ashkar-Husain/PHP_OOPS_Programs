<!-- Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks. An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code. -->
<?php
abstract class base{
    public $name;

    abstract protected function calc($a,$b); # We will implement this method in derived class
    
}
class derived extends base{
    
    public function calc($c,$b){
        $this->name = "Ashkar Husain";        
        echo "Hello I'm ".$this->name. "<br>";
        echo "The calculation of given parameters is ". $c * $b;
    }    
}
$operations = new derived();
$operations->calc(7,8)
?>