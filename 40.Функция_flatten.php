<?php
/*
Реализуйте функцию flatten, которая в случае, если массив обладает уровнями вложенности (любой глубины), приведёт его к элементарному виду. 
Пример:
flatten([1, [2], [3, [[[4]]]]]) // [1, 2, 3, 4]
*/

$arr = [1, [2], [3, [[[4]]]]];

function flatten($arr) {
  $res = json_encode($arr); // преобразуем в строку
  $res = preg_replace('/\[/', '', $res);
  $res = preg_replace('/\]/', '', $res);
  return explode(',', $res); // преобразуем обратно в массив
}

$res =  flatten($arr);
echo '<pre>';
print_r($res);