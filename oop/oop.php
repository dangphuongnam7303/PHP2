<?php
class sinhVien {
    // khai báo thuộc tính: biến
    public $name;
    public $maSV;
    public $namSinh;
    //hàm khởi tạo: hàm đặc biệt
    //hàm khởi tạo sẽ chạy ngay khi khởi tạo đối tượng
    //hàm khởi tạo có tên là __construct
    public function __construct($name, $maSV, $namSinh) {
        $this->name = $name;
        $this->maSV = $maSV;
        $this->namSinh = $namSinh;
    }
    //khai báo phương thức: hàm
    public function hienthithongtin ()
    {
        echo "Tên sinh viên: " . $this->name . "<br>";
        echo "Mã sinh viên: " . $this->maSV . "<br>";
        echo "Năm sinh: " . $this->namSinh . "<br>";
        echo "Tuổi: ". $this->tinhTuoi();
    }
    public function  tinhTuoi () {
        return date("Y") - $this->namSinh;
    }
    //xây dựng phương thức set
    public function set_name($name)
    {
        $this->name = $name;
    }
    public function set_maSV($maSV)
    {
        $this->maSV = $maSV;
    }
    public function set_namSinh($namSinh)
    {
        $this->namSinh = $namSinh;
    }
}
// khởi tạo đối tượng
$sv1 = new sinhVien('Đặng Phương Nam','PH26892','2003');
//$sv1->set_name("Đặng Phương Nam");
//$sv1->set_maSV("PH26892");
//$sv1->set_namSinh("2003");
//$sv1->hienthithongtin();
//$sv2 = new sinhVien();

//Tạo 1 class giảng viên bao gồm thuộc tính là magv, tengv, namsinh,luongCB, sogioday
//1. Xây dựng hàm khởi tạo cho các thuộc tính trên
//2. Xây dựng tuổi - có trả về
//3. Xây dựng phương thức tính lương cho giảng viên: =luongCB * soGioDay - có trả về
//4. Xây dựng hàm xếp loại dựa vào tổng lương: nếu lương >=5000: đạt, <5000: kđạt
//5. Xây dựng phương thức hiển thị thông tin cho giảng viên gồm magv, tengv,tuoi,tongluong và xếp loại
//Tạo 3 gv bất kỳ

class GiangVien{
    public $magv;
    public $tengv;
    public $namsinh;
    public $luongCB;
    public $sogioday;
    public function __construct($magv, $tengv, $namsinh, $luongCB, $sogioday)
    {
        $this->magv = $magv;
        $this->tengv = $tengv;
        $this->namsinh = $namsinh;
        $this->luongCB = $luongCB;
        $this->sogioday = $sogioday;
    }
    public function tinhTuoi()
    {
        return date("Y") - $this->namsinh;
    }
    public function tinhLuong()
    {
        return $this->luongCB * $this->sogioday;
    }
    public function xepLoai()
    {
        if($this->tinhLuong() >= 5000){
            return "Đạt";
        }
        return "Không đạt";
    }
    public function hienthi()
    {
        echo "Mã giảng viên: " . $this->magv . "<br>";
        echo "Tên giảng viên: " . $this->tengv . "<br>";
        echo "Tuổi: " . $this->tinhTuoi() . "<br>";
        echo "Tổng lương: " . $this->tinhLuong() . "<br>";
        echo "Xếp loại: " . $this->xepLoai() . "<br>";
    }
}
$gv1 = new GiangVien('thienth','Trần hữu thiện',1999,1000,10);
$gv1->hienthi();
$gv2 = new GiangVien('thangtd','Trần đình thắng',1999,100,10);
$gv2->hienthi();
$gv3 = new GiangVien('thangtd','Trần đình thắng',1999,1000,10);
$gv3->hienthi();



?>

