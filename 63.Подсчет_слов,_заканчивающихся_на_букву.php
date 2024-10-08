<?php 
/*
Напишите функцию, которая подсчитает, сколько слов в строке заканчиваются на заданную букву.
*/
function countEndWord($string, $letter) {
  $string = explode(' ', $string);
  $count = 0;
  foreach ($string as $word) {
    if(mb_substr($word, -1) == $letter) {
      $count++;
    }
  }

  return "Cлов в строке, которые заканчиваются на букву '$letter' - $count";
}

$text = "Солнечный свет пробивался сквозь густые ветви старого дуба, освещая пыльную тропинку, которая петляла через густой лес. Воздух был наполнен ароматом хвои и влажной земли, а вдали слышалось пение птиц. Неожиданно, из-за поворота тропы, показалась небольшая хижина с соломенной крышей, окутанная таинственным туманом.";

var_dump(countEndWord($text, 'е'));