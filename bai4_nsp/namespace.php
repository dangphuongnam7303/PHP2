<?php
include_once 'nsp.php';
include_once 'nsp2.php';
use nsp2 as n2;
use nsp as n1;
//sinh viên của namespace nsp1
$std = new n1\students('Nam',19);
$std->showInfo();
//sinh viên của namespace nsp2
$std = new n2\students('Nam',2003);
$std->showInfo();
