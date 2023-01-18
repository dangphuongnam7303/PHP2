<?php
class quadratic_equation {
    public $a;
    public $b;
    public $c;
    public function __construct($a,$b,$c)
    {
        $this -> a = $a;
        $this -> b = $b;
        $this -> c = $c;
    }
    public function delta() {
        return $this -> b * $this -> b - 4*$this->a*$this->c;
    }
    public function root() {
        $delta_tmp = $this -> delta();
        if ($delta_tmp > 0) {
            return "Phương trình có nghiệm x1= " . (-$this->b + sqrt($delta_tmp))/(2*$this->a) . "<br>".
                   "Phương trình có nghiệm x2= " . (-$this->b - sqrt($delta_tmp))/(2*$this->a) ;


        }else if ($delta_tmp == 0) {
            return "Phương trình có nghiệm kép: " . (-$this->b)/(2*$this->a);
        }else{
            return "Phương trình vô nghiệm";
        }
    }
}
$pt1 = new quadratic_equation(2,5,3);
echo $pt1 -> root();
?>
