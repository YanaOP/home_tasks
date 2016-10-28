<?php
/**
 * Создать массив любой размерности со случайными величинами от 1го до 10ти вывести первый индекс
 где элемент равен 1 и последний индекс где элемент равен 10
(если массив обьявлен как [2,1,10,3,1,10,1] на выходе я должен получить indexMin = 1, indexMax = 5)
 */
$arr = array();
for($i = 0; $i < 10 ; $i++){
    $arr[$i] = rand(1, 10);
}
print_r($arr);
echo "<br>";
for($i = 0; $i < 10 ; $i++){
    if ($arr[$i] === 1){
        echo 'The first index with value 1 is '.$i.'<br>';
        break;
    }
}
for($i = 9; $i >= 0 ; $i--){
    if ($arr[$i] === 10){
        echo 'The last index with value 10 is '.$i.'<br>';
        break;
    }
}