<!-- PHP - What is Inheritance?
Inheritance in OOP = When a class derives from another class.

The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.

An inherited class is defined by using the extends keyword. -->

<?php
class students {
    public $name;
    public $course;
    public $branch;
    public $fees;
    public $salary;

    function __construct($n,$c,$b,$f,$s){
        $this->name = $n;
        $this->course = $c;
        $this->branch = $b;
        $this->fees = $f;
        $this->salary = $s;
    }
    function show(){
        echo "<h3>Student Record</h3>";
        echo "Student Name : ".$this->name."<br>";
        echo "Student Course : ".$this->course."<br>";
        echo "Student Branch : ".$this->branch."<br>";
        echo "Student Fees : ".$this->fees."<br>";
    }
}
class faculty extends students{
    
    public $ta = 1000;
    public $phone = 300;
    public $total_salary;       

    
    function show(){

        echo "My name is Aahil Jafri and I am head of department of compuer science";
        $this->total_salary = $this->salary + $this->ta + $this->phone;
        echo "<h3>Faculty Record</h3>";
        echo "Faculty Name : ".$this->name."<br>";
        echo "Faculty Course : ".$this->course."<br>";
        echo "Faculty Department : ".$this->branch."<br>";
        echo "Faculty Salary : ".$this->total_salary."<br>";
    }


}

$std = new students("Ashkar","B.Tech","Computer Science",85000,0);
$fac = new faculty("Anuj","Diplomap","Civil",0, 30000);


// $std = new students("Ashkar","B.Tech","Computer Science",85000);

$std-> show();
$fac-> show();
?>