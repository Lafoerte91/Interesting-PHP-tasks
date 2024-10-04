<?php 
/*Корректность времени
Дано время в формате '12:59:59'. Проверьте, что это время корректное
*/
function checkTime($time) {
  // Регулярное выражение для проверки формата часов:минут
  $pattern = '/(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]/';

  if(preg_match($pattern, $time)) {
    return true;
  }

  return false;
}

echo checkTime('12:59:59') . '<br>';
echo checkTime('24:00:00') . '<br>';