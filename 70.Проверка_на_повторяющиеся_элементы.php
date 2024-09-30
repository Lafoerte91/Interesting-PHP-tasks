<?php 
/*
Определите, есть ли в массиве повторяющиеся элементы.
*/
function repeatElements($arr) {
  $arr = array_count_values($arr);

  foreach ($arr as $key => $value) {
    if($value > 1) {
      return "Есть повторяющиеся элементы";
    }
  }
  return "Нет повторяющихся элементов";
}

echo repeatElements([1, 2, 3, 4, 5]) . "<br>";
echo repeatElements([1, 2, 3, 4, 5, 1]) . "<br>";