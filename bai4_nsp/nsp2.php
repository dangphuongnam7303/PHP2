<?php
namespace nsp2;
class students
{
    public $name;
    public $birthOfDate;

    public function __construct($name, $birthOfDate)
    {
        $this->name = $name;
        $this->birthOfDate = $birthOfDate;
    }

    public function showInfo()
    {
        echo 'Name: ' . $this->name;
        echo 'Age: ' . $this->birthOfDate;
    }
}