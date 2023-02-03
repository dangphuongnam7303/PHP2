<?php
//định nghĩa 1 class trừu tượng
abstract class animal {
    //trong class trừu tượng sẽ có phương thức trừu tượng
    abstract function run() ;
}

class dog extends animal {
    public function run()
    {
        echo "Con chó chạy bằng 4 chân";
    }
}
class human extends animal {
    public function run()
    {
        echo "Con người đi bằng 2 chân";
    }
}
$dog1 = new dog();
$dog1 ->run();

//1. quan sát các class con
//2. tìm được những phương thức chung của các class con
//3. để xác định phương thức đấy đó có là trìu tượng hay không thì chỉ cần kiểm tra xem
//phương thức đấy đúng với class này nhưng k đúng với class kia thì nó là trìu tượng
?>
