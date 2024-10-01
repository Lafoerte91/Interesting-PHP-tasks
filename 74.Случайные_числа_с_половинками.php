<?php 
/*
Вывести случайное число в заданном промежутке, к примеру от 1 до 100. Случайное число может быть целым 3, или половинкой 3.5.
*/
function getRandomNumber($min, $max) {
  $integerPart = rand($min, $max);
  // Генерируем случайную дробную часть (0.0 - 0.9)
  $fractionalPart = rand(0, 9) / 10;
  
  // Объединяем целую и дробную части
  return $integerPart + $fractionalPart  . '<br>';
}

$min = 1;
$max = 100;

echo getRandomNumber($min, $max);