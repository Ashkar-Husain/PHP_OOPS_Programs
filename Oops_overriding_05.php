<!-- Overriding is an Object-Oriented Programming concept that is similar to a concept like Class, Object, Encapsulation, Polymorphism, Overloading etc in PHP. Overriding of functions and classes are done when a method in the derived class is created which is the same as that of the method in the base class or parent class. -->

<!-- ========example of property overriding=============== -->
<?php
 class base{
    public $name = "Parent class"."<br>";
}

class derived extends base{
    public $name = "Child class"."<br>"."<br>"; # property has same name 
}

$test = new base(); # Using base method
echo $test->name; 

$test2 = new derived(); # Using derived class
echo $test2->name; 

?>

<!-- ========example of method overriding=============== -->

<?php
 class base2{
    public $name = "Multiplication using base2 class"."<br>";
    public function calc($a,$b){       
        return $a * $b;        
    }
}

class derived2 extends base2{
    public $name = "<br>Addition using derived2 class"."<br>"; # property has same name 
    public function calc($a,$b){       
        return $a + $b;
    }
}

$test = new base2(); # Using base method
echo $test->name; 
echo $test->calc(7,8); 

$test2 = new derived2(); # Using derived class
echo $test2->name; 
echo $test2->calc(7,8); 


?>