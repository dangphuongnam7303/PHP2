<?php
 class Rectangle  {
    public $a;
    public $b;
    public function __construct ($a,$b) {
        $this -> a = $a;
        $this -> b = $b;
    }
    public function circumference() {
        return $this -> a * 2 + $this -> b * 2;
    }
    public function area() {
        return $this -> a * $this -> b;
    }
    public function show() {
        echo "Chiều dài: " . $this -> a . "<br>";
        echo "Chiều rộng: " . $this -> b . "<br>";
        echo "Area: " . $this -> area() . "<br>";
        echo "Circumference: " . $this -> circumference();

    }
}
$rec1 = new Rectangle(4,5);
 $rec1 -> show();
?>
