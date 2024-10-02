<?php 
/*
Даны два числа. Проверьте что эти числа состоят из одинакового набора цифр. Иначе говоря, проверьте то, что перестановкой цифр одного числа можно получить другое число.
*/
function cloneNumbers($num1, $num2) {
  $num1 = strval($num1);
  $num2 = strval($num2);
  $num1 = str_split($num1);
  $num2 = str_split($num2);
  sort($num1);
  sort($num2);
  if ($num1 == $num2) {
    return true;
  } else {
    return false;
  }
}

echo cloneNumbers(1234, 4321);
echo cloneNumbers(1234, 4311);