<?php 
/*
Дана строка с математическими операциями, например, такая: '2 + 3 * 5'. Выполните операции и выведите результат.
*/
$operations = '2 + 3 * 5';

function calculate($expression) {
  $result = "return ($expression);";
  $res = eval($result);
  return $res;
}

$result = calculate($operations);

echo "Результат: $result";


