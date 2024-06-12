<?php
/*
Дан массив. Удалите из него все элементы, которые встречаются только один раз.
*/
$arr = ['a', 'a', 'b', 'c', 'd', 'd', 'e', 'f', 'f']; 
$counts = array_count_values($arr); // подсчет уникальных значений

foreach ($counts as $key => $value) {
  if($value == 1) {
    $index = array_search($key, $arr); // получение индекса элемента
    unset($arr[$index]); // удаление элемента
  }
}

echo '<pre>';
print_r($arr);