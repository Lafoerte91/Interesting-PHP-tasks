<?php
/*
Подсчитайте суммарное количество цифр в числах от 1 до 1 000 000.
*/

$sum = 0;

for($i=1; $i<=1000000; $i++) {
  $sum += strlen($i);
}

echo $sum;