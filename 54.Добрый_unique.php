<?php
/*
Сделайте функцию, которая будет удалять дубли, встречающиеся более 3-х раз.
*/
$arr = [1, 2, 2, 3, 3, 3, 4, 4, 4, 4, 5, 5, 5, 5, 5];

function threeDouble($arr) {
  $res = [];
  $count = array_count_values($arr);
  foreach($count as $key => $value) {
    if($value > 3) {
      for($i = 0; $i < 3; $i++) {
        array_push($res, $key);
      }
    } else {
      for($i = 0; $i < $value; $i++) {
        array_push($res, $key);
      }
    }
  }
  return $res;
}

echo '<pre>';
print_r(threeDouble($arr));