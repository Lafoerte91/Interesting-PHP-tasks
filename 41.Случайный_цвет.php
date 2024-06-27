<?php
/*
Сделайте функцию, которая будет генерировать случайный цвет в hex формате (типа #ffffff).
*/

function generateRandomHexColor(): string {
  $hexColor = '#'; // Начало цвета
  for($i = 0; $i < 6; $i++) {
    $hexColor .= sprintf('%x', rand(0, 15)); // // Используем sprintf() с форматом %x для шестнадцатеричного представления
  }
  return $hexColor;
}

$randomColor = generateRandomHexColor();
echo $randomColor;