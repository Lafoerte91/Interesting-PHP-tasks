<?php 
/* Дан массив с числами. Подсчитайте количество цифр 3 в данном массиве. Например, в следующем массиве их пять:
[10, 13, 35, 3, 433] */
function digitsInArray($nums) {
  $count = 0;
  $array = implode($nums);
  for($i = 0; $i < strlen($array); $i++) {
    if($array[$i] == 3) {
      $count++;
    }
  }
  return $count;
}

echo digitsInArray([10, 13, 35, 3, 433]);