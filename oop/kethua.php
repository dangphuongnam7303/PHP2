<?php
class conNguoi{

    public $chan;
    public $tay;
    public $mat;
    public $mui;
    public function __construct($chan,$tay,$mat,$mui)
    {
        $this->chan=$chan;
        $this->tay=$tay;
        $this->mat=$mat;
        $this->mui=$mui;
    }

    public function an() {
        echo "ăn bằng gì ?";
    }


    public function setChan($chan)
    {
        $this->chan = $chan;
    }

}

class nguoiLon extends conNguoi{

    public $longNach;
    public function __construct($chan, $tay, $mat, $mui)
    {
        parent::__construct($chan, $tay, $mat, $mui);
    }

    public function di() {
    echo "đi bằng".$this->chan." chân";
    }
    public function noi() {
    echo "gâu gâu";
    }
}
class treCon extends conNguoi {
    public function bo() {
    echo "Trẻ con bò bằng " . $this->chan."chân";
    }
}

$nl1 = new nguoiLon();
$nl1 ->an();
$nl1 ->setChan(2);
$nl1 ->di();
$tc1 = new treCon();
$tc1 ->an();
$tc1->setChan(0);
$tc1->bo();


//tạo 1 class con người gồm họ tên, diachi, namsinh, sdt, email
//Gồm phương thức tinhtuoi có trả về = năm hiện tại - năm sinh
//Tạo các phương thức set giá trị cho các thuộc tính trên
//tạo 1 class sinh viên kthua con người gồm thuộc tính, diemtoan, diemly, diemhoa
//tạo các phương thức set giatri cho thuộc tính trên
//tạo pt tính điểm tb có tra về: (t+l+h) / 3
//tạo pt hiển thị họ tên, diachi, namsinh, sdt, email điểm tb
//tạo 1 class gv kế thừa từ con người gồm các thuộc tính lương cb, số giờ dạy
//tạo phương thức tổng lương có trả về = luongcb * sogioday
//tạo pt hiển thị thông tin gồm họ tên, diachi, namsinh, sdt, email tổng lương

class human {
    public $name;
    public $address;
    public $birthOfDate;
    public $phoneNumber;
    public $email;
    public function __construct($name,$address,$birthOfDate,$email,$phoneNumber)
    {
        $this->address=$address;
        $this->phoneNumber=$phoneNumber;
        $this->name=$name;
        $this->birthOfDate=$birthOfDate;
        $this->email=$email;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param mixed $birthOfDate
     */
    public function setBirthOfDate($birthOfDate)
    {
        $this->birthOfDate = $birthOfDate;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }
    public function old() {
        return date("Y") - $this->birthOfDate;
    }
    public function show() {
        echo "Họ và tên: " . $this->name."<br>";
        echo "Tuổi: " . $this->old()."<br>";
        echo "Email: " . $this->email."<br>";
        echo "Địa chỉ: " . $this->address."<br>";
        echo "Số điện thoại: ".$this->phoneNumber."<br>";
    }
}

class students extends human{
    public $math;
    public $physical;
    public $chemistry;

    /**
     * @param mixed $chemistry
     */
    public function setChemistry($chemistry)
    {
        $this->chemistry = $chemistry;
    }

    /**
     * @param mixed $math
     */
    public function setMath($math)
    {
        $this->math = $math;
    }

    /**
     * @return mixed
     */
    public function setPhysical($physical)
    {
         $this->physical=$physical;
    }

    public function avg() {
        return ($this->physical + $this->chemistry + $this -> math)/3;
    }
    public function showStudent() {
        $this->show();
        echo "Điểm trung bình: ".$this->avg()."<br>";
    }
}

class teachers extends human{
    public $wage;
    public $hours;

    /**
     * @param mixed $gio
     */
    public function setHours($hours)
    {
        $this->hours = $hours;
    }

    /**
     * @param mixed $luongcb
     */
    public function setWage($wage)
    {
        $this->wage = $wage;
    }
    public function sum() {
        return $this->wage * $this->hours;
    }
    public function showTeacher() {
        $this->show();
        echo "Lương: " . $this->sum()."<br>";
    }
}
$teacher1 = new teachers("Phương","Hà nội",2001,"txp111@aquarius.com","0123456789");
$teacher1->setWage(2000000);
$teacher1->setHours(50);
$teacher1->showTeacher();

$student1 = new students("Phương","Hà nội",2001,"txp111@aquarius.com","0123456789");
$student1->setChemistry(9);
$student1->setMath(9);
$student1->setPhysical(9);
$student1->showStudent();
?>
