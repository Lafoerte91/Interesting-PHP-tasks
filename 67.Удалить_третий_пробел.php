<?php
/*
Дана строка. Удалите из нее третий пробел. Пример: строка '12 34 56 78' станет '12 34 5678'.
*/
$text = '12 34 56 78';

function deleteThirdSpace($str) {
  $countSpace = 0;
  $str = str_split($str);
  foreach ($str as $key => $value) {
    if($value == ' ') {
      $countSpace++;
    }
    if($countSpace == 3) {
      unset($str[$key]);
      $countSpace = 0;
    }
  }

  return  implode($str);
}

echo deleteThirdSpace($text );