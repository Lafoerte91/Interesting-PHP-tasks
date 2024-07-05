<?php
/*
Написать функцию, на вход которой подается массив с числовыми элементами. Функция должна вернуть отсортированный массив по частоте повтора элементов в нем.
Пример. На вход функции подаем следующий массив:
[5, 9, 2, 4, 1, 2, 5, 8, 2, 2, 8, 4, 5]
В результате после сортировки получим следующий массив:
[2, 2, 2, 2, 5, 5, 5, 4, 4, 8, 8, 9, 1]
*/

function sortArr($array): array {
  $arr = [];
  $count = array_count_values($array); // подсчет значений
  arsort($count); // сортируем по убыванию числа вхождений
  foreach ($count as $key => $value) {
    for($i = 0; $i < $value; $i++) {
      array_push($arr, $key);
    }
  }
  return $arr;
}

$res = sortArr([5, 9, 2, 4, 1, 2, 5, 8, 2, 2, 8, 4, 5]);

echo '<pre>';
print_r($res);