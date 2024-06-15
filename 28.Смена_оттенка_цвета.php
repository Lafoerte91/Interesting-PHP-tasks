<?php
/*
Сделайте функцию, которая будет принимать цвет в hex формате и делать его более темного оттенка.
*/

function darkenColor($hexColor, $factor = 0.4) {
  // Убираем символ '#' из hex-кода
  $hexColor = str_replace('#', '', $hexColor);
  // Преобразуем hex-код в RGB
  $r = hexdec(substr($hexColor, 0, 2)); // Получаем первые 2 символа
  $g = hexdec(substr($hexColor, 2, 2)) ;// Получаем символы с 2 по 4
  $b = hexdec(substr($hexColor, 4, 2)); // Получаем символы с 4 по 6
  // Уменьшаем значение каждого цветового канала
  $r  = round($r * (1 - $factor)); // Округляем в большую сторону
  $g  = round($g * (1 - $factor)); 
  $b = round($b * (1 - $factor));
  // Преобразуем RGB обратно в hex
  $r = str_pad(dechex($r), 2, '0', STR_PAD_LEFT); // Добавляем нули слева
  $g = str_pad(dechex($g), 2, '0', STR_PAD_LEFT); 
  $b = str_pad(dechex($b), 2, '0', STR_PAD_LEFT); 
  // Возвращаем новый hex-код
  return '#' . $r . $g . $b;
}

$originalColor = '#ff0000'; // Оригинальный цвет
$darkerColor = darkenColor($originalColor);

echo $darkerColor;

