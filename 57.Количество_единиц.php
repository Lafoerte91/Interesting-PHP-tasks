<?php
/*
Найдите суммарное количество единиц в числах от 1 до 100.
*/
function countOne($num) {
  $count = 0 ;
  for ($i = 1; $i <= $num; $i++) {
    $count +=  substr_count(strval($i ), '1');
  }
  return $count;
}

echo "Количество единиц в числах от 1 до 100: " . countOne(100) . "\n";