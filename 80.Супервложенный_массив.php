<?php 
/*
Создайте массив следующего вида:
[ 1, [2], [[3]], [­[[4]]], [[[[5]]]] ]
Массив может быть произвольной длины.
*/
function createArr($n) {
  $arr = [];

  for ($i = 1; $i <= $n; $i++) {
    $temp = $i;
    for($j = 1; $j <= $i; $j++) {
      $temp = [$temp];
    }

    array_push($arr, $temp);
  }

  return json_encode($arr);
}

print_r(createArr(5));

