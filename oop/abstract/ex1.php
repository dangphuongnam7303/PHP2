<?php
//Xây dựng 1 class để tính chu vi, diện tích hình vuông
//Xây dựng 1 class để tính chu vi, diện tích hình chữ nhật
//Xây dựng 1 class để tính chu vi, diện tích hình thang
//Tìm 1 class trìu tượng cho cả 3 class trên và xác định những phương thức trừu tượng

abstract class geometry {
    public $a;
    public $b;
    public function __construct($a,$b)
    {
    $this -> a = $a;
    $this -> b = $b;
    }
    abstract function area();
    abstract function perimeter();
}

class square extends geometry {
    public function area()
    {
        echo "Area: " . $this->a*$this->b . "<br>";
    }
    public function perimeter()
    {
        echo "Perimeter: " . $this->a*4;
    }
}

class rectangle extends geometry {
    public function area()
    {
        echo "Area: " . $this->a*$this->b . "<br>";
    }
    public function perimeter()
    {
        echo "Perimeter: " . ($this->a + $this->b)*2 ."<br>";
    }
}

class trapezoid extends geometry {
    public function __construct($a, $b, $h,$c,$d)
    {
        parent::__construct($a, $b);
        $this -> h = $h;
        $this -> c = $c;
        $this -> d = $d;

    }

    public function area()
    {
        echo "Area: " . ($this->a+$this->b)*$this->h/2 . "<br>";
    }
    public function perimeter()
    {
        echo "Perimeter: " . ($this->a + $this->b + $this->c+$this->d)."<br>";
    }
}

$square1 = new square(4,4);
echo "Hình vuông" . "<br>";
$square1->area();
$square1->perimeter();
echo "<hr>";
echo "Hình chữ nhật" . "<br>";
$rec1=new rectangle(4,5);
$rec1->area();
$rec1->perimeter();
echo "<hr>";
$trap1 = new trapezoid(4,5,6,7,8);
$trap1->area();
$trap1->perimeter();




?>
