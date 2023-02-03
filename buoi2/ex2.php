<?php
class math{
    public function addition($a,$b) {
        return $a+$b;
    }

    public function subtraction($a,$b) {
        return $a-$b;
    }
    public  function multiplication($a,$b){
        return$a*$b;
    }
    public function division($a,$b) {
        return $a/$b;
    }
    public function power($a,$b) {
        return pow($a,$b);
    }
    public function checkParity($n) {
            return ($n % 2 == 0) ? "even" : "odd";
    }
    public function checkPrimeNumber($n) {
        if ($n < 2) return false;
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) return false;
        }
        return true;
    }

    public function checkPerfectNumber($n) {
         $sum = 0;
        for ($i = 1; $i < $n; $i++) {
            if ($n % $i == 0) $sum += $i;
        }
        return ($sum == $n) ? true : false;
    }
}

class checkNumber extends math {
    public $n;

    /**
     * @param mixed $n
     */
    public function setN($n)
    {
        $this->n = $n;
    }
    public function checkPrimeNumber($n)
    {
        return parent::checkPrimeNumber($n); // TODO: Change the autogenerated stub
    }
    public function checkPerfectNumber($n)
    {
        return parent::checkPerfectNumber($n); // TODO: Change the autogenerated stub
    }
    public function checkParity($n)
    {
        return parent::checkParity($n); // TODO: Change the autogenerated stub
    }

}
class showNumber extends math {
    public $n;

    /**
     * @param mixed $n
     */
    public function setN($n)
    {
        $this->n = $n;
    }

    public function showPrimeNumber() {
        echo "Prime number:" ;
        for ($i = 2; $i <= $this->n; $i++) {
            if (parent::checkPrimeNumber($i)) {
                echo  $i . " ";
            }
        }
        echo "<br>";
    }

    public function showPerfectNumber() {
        echo "Perfect number: " ;
        for ($i=2;$i<=$this-> n;$i++){
            if (parent::checkPerfectNumber($i)) {
                echo $i . " ";
            }
        }
        echo "<br>";
    }
    public function showEvenNumber() {
        echo "Even number: ";
        for ($i=2;$i<=$this-> n;$i++){
            if (parent::checkParity($i) == "even") {
                echo$i . " ";
            }
        }
        echo "<br>";
    }
}
class calculateNumber extends math{
    public $a;
    public $b;
    public function __construct($a,$b)
    {
        $this -> a = $a;
        $this -> b = $b;
    }
    public function addition($a, $b)
    {
        echo "Sum: " . parent::addition($a, $b) . "<br>"; // TODO: Change the autogenerated stub
    }

    public function subtraction($a, $b)
    {
        echo "Difference: " . parent::subtraction($a, $b) . "<br>"; // TODO: Change the autogenerated stub
    }
    public function multiplication($a, $b)
    {
        echo "Product: " . parent::multiplication($a, $b) . "<br>"; // TODO: Change the autogenerated stub
    }
    public function division($a, $b)
    {
        echo "Quotient: " . parent::division($a, $b) . "<br>"; // TODO: Change the autogenerated stub
    }
    public function power($a, $b)
    {
        echo "a^b: " . parent::power($this->a, $this->b) . "<br>";
        echo "b^a: " . parent::power($this->b, $this->a) . "<br>";
    }
}
$n1 = new checkNumber();
$n1->setN(7);

$cal=new calculateNumber(5,7);
$cal->addition(5,7);
$cal->division(5,7);
$cal->multiplication(5,7);


$showNumber1 = new showNumber();
$showNumber1->setN(8);
$showNumber1->showPerfectNumber();
$showNumber1->showEvenNumber();
$showNumber1->showPrimeNumber();

?>