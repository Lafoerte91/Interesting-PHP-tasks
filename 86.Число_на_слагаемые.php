<?php 
/*
Дано целое число. Разбейте его на два целых слагаемых случайным образом.
*/
function splitIntegerRndomOnly($number) {
  if($number <= 1) {
    return json_encode([0, $number]); // Если число меньше или равно 1, возвращаем [0, число]
  }

  $firstPart = rand(1, $number - 1); // Генерируем первое слагаемое от 1 до number-1
  $secondPart = $number - $firstPart; // Вычисляем второе слагаемое

  return json_encode([$firstPart, $secondPart]);
}

$integer = 10;

echo "Число $integer разбито на слагаемые случайным образом: " . splitIntegerRndomOnly($integer) . "<br>";