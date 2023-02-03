<?php
class ToanHoc {
    //Method to calculate the sum, difference, product, and quotient of 2 numbers
    public function tinhTong($a, $b) {
        return $a + $b;
    }
    public function tinhHieu($a, $b) {
        return $a - $b;
    }
    public function tinhTich($a, $b) {
        return $a * $b;
    }
    public function tinhThuong($a, $b) {
        return $a / $b;
    }

    //Method to calculate the exponent of 2 numbers
    public function tinhMu($a, $b) {
        return pow($a, $b);
    }

    //Method to check even and odd numbers of n
    public function kiemTraChanLe($n) {
        return ($n % 2 == 0) ? "even" : "odd";
    }

    //Method to check prime numbers, perfect numbers
    public function kiemTraNguyenTo($n) {
        if ($n < 2) return false;
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) return false;
        }
        return true;
    }
    public function kiemTraHoánHảo($n) {
        $sum = 0;
        for ($i = 1; $i < $n; $i++) {
            if ($n % $i == 0) $sum += $i;
        }
        return ($sum == $n) ? true : false;
    }
}

class KiemTraSo extends ToanHoc {
    private $number;
    public function nhapSo($n) {
        $this->number = $n;
    }
    public function kiemTraNguyenTo() {
        return parent::kiemTraNguyenTo($this->number);
    }
    public function kiemTraHoánHảo() {
        return parent::kiemTraHoánHảo($this->number);
    }
    public function kiemTraChanLe() {
        return parent::kiemTraChanLe($this->number);
    }
}

class HienThiSo extends ToanHoc {
    private $number;
    public function nhapSo($n) {
        $this->number = $n;
    }
    public function hienThiNguyenTo() {
        for ($i = 2; $i <= $this->number; $i++) {
            if (parent::kiemTraNguyenTo($i)) {
                echo $i . " ";
            }
        }
    }
    public function hienThiHoánHảo() {
        for ($i = 1; $i <= $this->number; $i++) {
            if (parent::kiemTraHoánHảo($i)) {
                echo $i . " ";
            }
        }
    }
    public function hienThiChanLe() {
        for ($i = 1; $i <= $this->number; $i++) {
            if (parent::kiemTraChanLe($i) == "even") {
                echo$i . " ";
            }
        }
    }
}

class TinhSo extends ToanHoc {
    private $a, $b;
    public function nhapHaiSo($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }
    public function hienThiTong() {
        echo "Sum: " . parent::tinhTong($this->a, $this->b) . "\n";
    }
    public function hienThiHieu() {
        echo "Difference: " . parent::tinhHieu($this->a, $this->b) . "\n";
    }
    public function hienThiTich() {
        echo "Product: " . parent::tinhTich($this->a, $this->b) . "\n";
    }
    public function hienThiThuong() {
        echo "Quotient: " . parent::tinhThuong($this->a, $this->b) . "\n";
    }
    public function hienThiMu() {
        echo "a^b: " . parent::tinhMu($this->a, $this->b) . "\n";
        echo "b^a: " . parent::tinhMu($this->b, $this->a) . "\n";
    }
}


