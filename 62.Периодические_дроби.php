<?php
/*
Реализуйте функцию, которая будет принимать два целых числа, и проверять, результатом деления получается периодическая дробь или нет.
*/
function isPeriodicFraction($numerator, $denominator) {
  // Проверка деления на ноль
  if ($denominator == 0) {
    return "Деление на ноль невозможно";
  }

  // Если числитель делится на знаменатель без остатка, дробь конечна
  if($numerator % $denominator == 0) {
    return "Дробь конечна" . '<br>';
  }

  // Проверка, является ли знаменатель степенью двойки или пятерки
  if(isPowerOff(2, $denominator) || isPowerOff(5, $denominator)){
    return "Дробь конечна" . '<br>';
  }
  // Если знаменатель не является степенью двойки или пятерки, дробь периодическая
  return "Дробь периодическая" . '<br>';
}

// Вспомогательная функция для проверки степени числа
function isPowerOff($base, $number) {
  if($number <= 0) {
    return false;
  }
  while($number % $base == 0) {
    $number /= $base;
  }
  return  $number == 1;
}

var_dump(isPeriodicFraction(1, 3));
var_dump(isPeriodicFraction(5, 2));