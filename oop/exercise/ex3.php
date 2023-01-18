<?php
class students {
    public $name;
    public $age;
    public $address;
    public $math;
    public $chemistry;
    public $physical;
    public function __construct($name,$age,$address,$math,$chemistry,$physical)
    {
        $this -> name = $name;
        $this -> age = $age;
        $this -> address = $address;
        $this -> math = $math;
        $this -> chemistry = $chemistry;
        $this -> physical = $physical;
    }
    function avg() {
        return ($this->math + $this -> chemistry + $this -> physical)/3;
    }
    function rank() {
        if ($this -> avg()<4) {
            return "Yếu";
        }else if($this -> avg() >= 4 && $this ->avg() <6) {
            return "Trung bình";
        }else if($this -> avg() >= 6 && $this ->avg() <8) {
            return "Khá";
        }else {
            return "Giỏi";
        }
    }

    function  show() {
        echo " 
 <table border='1'>
 <tr>
 <td>Name</td>
 <td>Age</td>
 <td>Address</td>
 <td>Rank</td>
</tr>
<tr>
<td>".$this->name." </td>
<td>".$this->age." </td>
<td>".$this->address." </td>
<td>".$this->rank()." </td>
</tr>
     </table>
        ";
    }
}
$std1 = new students("Trương Xuân Phương","21","Hà Nội",9,9,9);
$std1->show();