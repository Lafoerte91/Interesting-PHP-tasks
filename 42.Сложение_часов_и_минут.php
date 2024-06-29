<?php
/*
Напишите функцию, которая корректно будет складывать часы и минуты. Пример:
<?php
  func('1ч 20 мин + 50 мин') // 2ч 10 мин
?>
*/

$time = '1ч 20 мин + 50 мин';

function func($time) {
  $hours = mb_substr($time, 0, mb_strpos($time, 'ч'));
  $minutes = mb_substr($time, mb_strpos($time, 'ч') + 2, mb_strpos($time, 'мин') - 4);
  $add = mb_substr($time, mb_strpos($time, '+') + 2, mb_strpos($time, 'мин') - 4);
  $addTime = ($hours * 60) + $minutes + $add;
  $addTime = gmdate('H', $addTime * 60) . 'ч ' . gmdate('i', $addTime * 60) . ' мин'; // преобразование в часы и минуты
  return $addTime;
}

$res =  func($time);
echo $res;