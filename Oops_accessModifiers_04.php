<!-- PHP - Access Modifiers
Properties and methods can have access modifiers which control where they can be accessed.

There are three access modifiers:

public - the property or method can be accessed from everywhere. This is default
protected - the property or method can be accessed within the class and by classes derived from that class
private - the property or method can ONLY be accessed within the class -->


<!-- Example_01_public -->
<?php
class PublicName{
    public $name;
    public function __construct($n){
        $this->name = $n;
    }
    public function show(){
        echo "My name is ".$this->name. "</br>";
    }
}
$showName = new PublicName("Virat kohli");
// Here I will over write the name "Virat Kohli" to "Rohit Sharma" from outside the class as we are working with public access here...!
$showName->name = "Rohit Sharma";
$showName->show();
?>

<!-- Example_01_protected -->
<?php
class ProtectedName{
    protected $name;
    public function __construct($n){
        $this->name = $n;
    }
    protected function show(){
        echo "My name is ".$this->name. "</br>";
    }   
}
class pro extends ProtectedName{
    public function get(){
        echo "My name is ".$this->name. "<br>";        
    }
}
$showName = new pro("Virat kohli");

$showName->get();
?>

<!-- Example_01_private -->
<?php
class PrivateName{
    private $name;
    public function __construct($n){
        $this->name = $n;
    }
    public function show(){
        echo "My name is ".$this->name. "</br>";
    }
}
$showName = new PrivateName("Virat kohli");
// Here I can't over write the name "Virat Kohli" to "Rohit Sharma" from outside the class as we are working with private access here...!
$showName->name = "Rohit Sharma"; # This will show a fatal error here because I declared private property name above, You can comment thi line and see the result
$showName->show();
?>

