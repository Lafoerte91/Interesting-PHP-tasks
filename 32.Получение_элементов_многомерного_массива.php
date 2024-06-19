<?php
/*
Дан многомерный массив произвольного уровня вложенности.
Сделайте функцию, с помощью которой можно будет получить значения элемента с любого уровня вложенности, указав ключи последовательно через точку:
*/

$arr = [
  'a' => [
    'b' => [
      'c' => '+++'
    ]
  ]
];

function func($path, $arr) {
  $keys = explode('.', $path); // разделяем путь на ключи
  $result = $arr;
  foreach($keys  as $key)  {
    if(isset($result[$key])) {
      $result =  $result[$key]; //  записываем следующий уровень вложенности
    } else {
      return null;
    }
  }
  return $result; 
}

$res = func('a.b.c', $arr);
var_dump($res);