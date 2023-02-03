<?php
namespace nsp;
class students{
    public $name;
    public $age;
    public function __construct($name, $age)
    {
        $this -> name = $name;
        $this -> age = $age;
    }
    public function showInfo (){
        echo 'Name: ' . $this->name;
        echo 'Age: ' . $this->age;
    }
}
class teacher {

}