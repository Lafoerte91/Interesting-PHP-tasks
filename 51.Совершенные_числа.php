<?php
/*
Сделайте функцию, которая будет проверять, является ли число совершенным.
*/

function perfectNumber($number) {
  $sum = 0;
  for($i = 1; $i < $number; $i++) {
    if($number % $i == 0) {
      $sum += $i;
    }
  }

  if($sum == $number) {
    return 'Совершенное число';
  } else {
    return 'Не совершенное число';
  }
}

echo perfectNumber(6);
echo '<br>';
echo perfectNumber(28);
echo '<br>';
echo perfectNumber(49);