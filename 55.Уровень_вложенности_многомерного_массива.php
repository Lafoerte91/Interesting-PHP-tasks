<?php
/*
Дан произвольный многомерный массив. Определите максимальный уровень вложенности этого массива.
*/
function getMaxDepth($array, $level=0) {
  $maxDepth = $level;
  foreach ($array as $value) {
    if(is_array($value)) {
      $maxDepth = getMaxDepth($value, $level+1);
    }
  }
  return $maxDepth;
}

$arr =[1, [2], [3, [[[4]]]]];
$maxLevel = getMaxDepth($arr); 

echo "Максимальный уровень вложенности: $maxLevel";
