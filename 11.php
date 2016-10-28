<?php
/**
Написать функцию которая будет строить таблицу, как мы делали на занятии, НО, я хочу что бы массив был в таком виде
http://joxi.ru/vAWZq3BfkJN932
Как результат я хочу получить две колонки первая будет показывать индекс элемента вторая будет значения и хранить в себе
css который указан в styles (I am text должно быть показано на красном фоне и 12 шрифтом)
 */
$arr = [
    0 => [
        'value' => "I'm the first text",
        'style' => [
            'background-color' => 'red',
            'font-size' => '12'
        ]
    ],
    1 => [
        'value' => "I'm the second text",
        'style' => [
            'background-color' => 'blue',
            'font-size' => '12'
        ]
    ],
    2 => [
        'value' => "I'm the third text",
        'style' => [
            'background-color' => 'green',
            'font-size' => '12'
        ]
    ]
];

$len = count($arr);

echo $html = '<table border="1">
    <thead>
        <tr>
           <td> KEY </td>
           <td> VALUE </td>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td> TOTAL</td>
            <td>'.$len.'</td>
        </tr>
    </tfoot>
<tbody>';
for ($i = 0; $i < $len; $i++){
    // $clr = ;$font_size = $arr[$i]['style']['font-size'];
    echo '<tr>
       <td>'.$i.' </td>
       <td style="
           background-color:'.$arr[$i]['style']['background-color'].';
           font-size: '.$arr[$i]['style']['font-size'].'" 
       >'.$arr[$i]['value'].'</td>
      </tr>';
} //

echo '</tbody> </table>';
