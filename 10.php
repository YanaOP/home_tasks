<?php
/**
Создать шар предсказатель
При перезагрузке страницы я буду получать разные сообщения типа (Да Возможно Никогда и т.д)
 */
$ball = array('yes', 'no', 'maybe','probably', 'who knows');
$len = count($ball);
echo $ball[rand(0, $len-1)];
