<!-- Lets start learning oops, today we will start with a basic example of class and object -->
<?php
class calculation{
    public $a,$b,$c;
    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
    function mul(){
        $this->c = $this->a * $this->b;
        return $this->c;
    }
}
$c1 = new calculation();
$c1->a =60;
$c1->b =20;

$c2 = new calculation();
$c2->a =18;
$c2->b =13;

echo"Sum of c1 is ".$c1->sum(). "<br>";
echo "Sub of c2 is ".$c2->sub()."<br>";
echo "Sub of c1 is ".$c1->sub()."<br>";
echo "Sum of c2 is ".$c2->sum()."<br>";
echo "Mul of c1 is ".$c1->mul()."<br>";
echo "Multiplication of c2 is ".$c2->mul();
?>