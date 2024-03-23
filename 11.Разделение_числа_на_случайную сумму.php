<?php 
/*
Дано целое число. Разбейте его на случайное количество целых чисел так, чтобы в сумме они давали это число. Пример: 100 можно разбить на 50+50, или 51+49, или 20+30+50. Количество фрагментов должно быть любым, случайным, сами фрагменты тоже должны быть случайными.
*/
function randomSplit($number) {
  $result = [];
  $remaining = $number;
  while($remaining > 0) {
    if($remaining == 1) {
      $result[] = 1;
      break;
    }
    $randomSplit = mt_rand(1, $remaining);
    $result[] = $randomSplit;
    $remaining -= $randomSplit;
  }
  return $result;
}

$number = 100;
$splitNumbers = randomSplit($number);

echo implode('+', $splitNumbers);