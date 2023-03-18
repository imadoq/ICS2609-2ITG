<?php

class NameOfClass {
    private $strName;
    private $intAge;

    public function setIntAge($a) {
        $this->intAge = $a;
    }
    
    public function setStrName($a) {
        $this->strName = $a;
    }

    public function getInt() {
        return $this->intAge;
    }
    
    public function getStr() {
        return $this->strName;
    }

    public function displayInfo() {
        echo "First String: " . $this->getStr() . "<br>";
        echo "First Integer: " . $this->getInt() . "<br>";
    }
}

class NameOfChild extends NameOfClass{
    private $secondStr;

    public function __construct($str, $intAge, $secondStr) {
        $this->setStrName($str);
        $this->setIntAge($intAge);
        $this->secondStr = $secondStr;
    }

    public function getsecondStr() {
        return $this->secondStr;
    }

    public function displayInfo($param = null) {
        parent::displayInfo();
        echo "Second String: " . $this->secondStr . "<br>";
        if ($param === null) {
            echo "If this is not overloaded this will be printed <br>";
        } else {
            echo "Successfully overloaded <br>";
        }
    }
}


class MultilevelInheritance extends NameOfChild {
    private $thirdInt;

    public function __construct($str, $intAge, $secondStr, $thirdInt) {
        parent::__construct($str, $intAge, $secondStr);
        $this->thirdInt = $thirdInt;
    }

    public function getThirdInt() {
        return $this->thirdInt;
    }
}


//this is the regular class
$obj1 = new NameOfClass();
$obj1->setStrName("Hello");
$obj1->setIntAge(42);
$obj1->displayInfo();
echo "<br>";


//this is the class that uses inheritance from the first classs
$obj2 = new NameOfChild("Hi", 99, "Extra");
$obj2->displayInfo();
echo "<br>";
$obj2->displayInfo("123");
echo "<br>";

//this is the class that uses multilevel inheritance
$obj3 = new MultilevelInheritance("Hey", 10, "More", 5);
$obj3->displayInfo();
echo "Third Integer: " . $obj3->getThirdInt() . "<br>";

?>