<?php
/**
Заполнить массив случайными числами от 1 до 10, число элементов массива случайное от 5 до 20
 */
$arr = array();
$count = rand(5,20);
for($i = 0; $i < $count ; $i++){
    $arr[$i] = rand(1, 10);
} print_r($arr);