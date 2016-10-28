<?php
/**
Создать массив случайно величины от 5 до 20 и вывести индексы в которых установлены четные значения (2 4 6 8 10 и т.д
 */
$arr = array();
$count = rand(5,20);
for($i = 0; $i < $count ; $i++){
    $arr[$i] = rand(1, 100);
    if ($arr[$i] % 2 == 0){
        echo 'Here (index = '.$i.') is an even value <br>';
    }
} print_r($arr);
