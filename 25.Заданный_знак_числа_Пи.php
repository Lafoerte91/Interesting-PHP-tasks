<?php 
/*
Сделайте функцию, которая будет возвращать заданный знак числа Пи (например, тысячный знак). Номер знака передается параметром функции.
*/
function getPiDigit($digit) {
  $pi = pi();

  // Умножаем число Пи на 10^($digit - 1), чтобы получить нужный разряд
  $scaledPi = $pi * pow(10, $digit - 1);

  // Округляем до целого числа
  $roundedPi = round($scaledPi);

  // Получаем последнюю цифру
  $lastDigit = $roundedPi % 10;

  return $lastDigit;
}

$thousandthDigit = getPiDigit(1000);

echo "Тысячный знак числа Пи: " . $thousandthDigit . "\n";