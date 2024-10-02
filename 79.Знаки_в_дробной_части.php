<?php 
/*
Дано число. Узнайте, сколько знаков у него в дробной части.
*/
function fractionalPart($number) {
  $number = (string)$number;
  $decimalPlaces = strlen(mb_substr(strchr($number, '.'), 1));
  $number = sprintf('%.' . $decimalPlaces . 'f', $number);
  $number = explode('.', $number)[1];

  return strlen($number);
}

echo fractionalPart(1.234) . '<br>';
echo fractionalPart(1.0120) . '<br>';
echo fractionalPart(2.30) . '<br>';