<?php
/**
Создать массив размерности 20 (тоесть в массиве должно быть двадцать элементов)
В качестве элемента массива будет текст сконкатенированый (склееный) с индексом массива
(тоесть Text0, Text1, Text2… Text19)
 */
$arr = array();
for($i = 0; $i < 20 ; $i++){
    $arr[$i] = 'Text'.$i;
} print_r($arr);
