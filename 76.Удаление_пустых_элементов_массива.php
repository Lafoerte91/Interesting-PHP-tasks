<?php 
/*
Удалите из массива все элементы, являющиеся пустыми строками:
[1, '', 2, '', '', 3]
*/
$arr = [1, '', 2, '', '', 3];

function notEmptyInArr($arr) {
  $arr = array_filter($arr);

  return $arr;
}

print_r(notEmptyInArr($arr));
