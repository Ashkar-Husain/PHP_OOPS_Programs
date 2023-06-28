<?php
class myBrother{
    public $fname, $lname; # variable names have global scope

    function __construct($fn, $ln){ # variable names have local scope

        $this->fname = $fn;
        $this->lname = $ln;
    }
    function show(){
        echo $this->fname. '  '. $this->lname. '<br>';
    }
}
$Brother = new myBrother("Kamyab","Husain");
$Brother2 = new myBrother("Altamash","Husain");
$Brother3 = new myBrother("Nihal","Husain");

// $father->fname = "Sahir";
// $father->lname = "Husain";

$Brother->show();
$Brother2->show();
$Brother3->show();
?>
