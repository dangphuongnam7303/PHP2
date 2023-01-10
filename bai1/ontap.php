<?php
$a=5;
$b='FPT';
$c = false;
//echo $b.$a;
$array = array(1,2,3,4,5,6);
//echo $array[2];
//var_dump($array);
//echo print_r($array);
foreach ($array as $value => $key) {
    if($key%2==0){
        echo $key;
    }
}


?>
