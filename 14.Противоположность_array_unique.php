<?php 
/*
Реализуйте функцию-противоположность array_unique. Наша функция должна оставлять элементы, имеющие дубли.
*/

$colors = ['green', 'red', 'blue', 'red', 'green', 'red'];

function notUnique($arr) {
  $res = [];
  $answer = [];
  foreach ($arr as $value) {
    if(!array_key_exists($value, $res)) {
      $res[$value] = 1;
    } else {
      $res[$value]++;
    }
  }
  foreach ($res as $key => $value) {
    if($value > 1) {
      for($i = 0; $i < $value; $i++) {
        $answer[] = $key;
      }
    }
  }
  return $answer;
}


echo '<pre>';
print_r(notUnique($colors));