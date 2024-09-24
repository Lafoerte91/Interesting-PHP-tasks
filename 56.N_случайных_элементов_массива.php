<?php
/*
Дан массив. Запишите в другой массив N случайных элементов из него так, чтобы один элемент был использован только один раз.
*/
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function randomArr($arr, $n) {
  $res = [];
  for($i = 0; $i < $n; $i++) {
    $randNum = $arr[rand(0, count($arr) - 1)];
    if(!in_array($randNum, $res)) {
      array_push($res, $randNum);
    } else {
      $i--;
    }
  }
  return $res;
}

print_r(randomArr($arr, 5));