<?php
/*
Напишите функцию, которая параметрами будет принимать два массива:
<?php
  $res = func([1, 2, 3], ['a', 'b', 'c']);
?>
А в качестве результата сливать эти массивы таким образом:
<?php
  var_dump($res); // [1, 'a', 2, 'b', 3, 'c']
?>
*/

function func($arr1, $arr2) {
  $arr = [];
  for($i = 0; $i < count($arr1); $i++) {
    array_push($arr, $arr1[$i]);
    array_push($arr, $arr2[$i]);
  }
  return $arr;
}

$res = func([1, 2, 3], ['a', 'b', 'c']);

echo '<pre>';
var_dump($res); // [1, 'a', 2, 'b', 3, 'c']