<?php
//Tính đa hình được định nghĩa là interface
//Interface không là 1 class do vậy nó không có phương thức và thuộc tính
//Interface chỉ có phương thức trìu tượng mà thôi
//Interface để định nghĩa phương thức trìu tượng thì k cần từ khóa abstract khai báo
//bình thường là sẽ tự hiểu phương thức trìu tượng
interface move {
    //định nghĩa phương thức trìu tượng
    function run();
}
class dog implements move {
    public function run()
    {
        echo "Dog run with 4 legs";
    }
}
class car implements move{
    public function run()
    {
        echo "Car";
    }
}
$dog1 = new dog();
$dog1 -> run();
//trìu tượng là 1 bản thiết kế chó các class có cùng bản chất
//đa hình - interface cũng là bản thiết kế nhưng là thiết kế cho class có cùng phương thức
//mà không cần cùng bản chất
