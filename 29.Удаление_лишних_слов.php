<?php 
/*
Дан текст. Найдите все места с двумя одинаковыми словами подряд и удалите лишние слова.
*/
$text = "Это очень очень хороший хороший день день";

function removeDuplicateWords($text) {
  $text = explode(' ', $text);
  $countsWords = array_count_values($text);
  print_r($countsWords);
  foreach($text as $key => $value) {
    if($countsWords[$value] > 1) {
      $index = array_search($value, $text);
      unset($text[$index]);
      $countsWords[$value] --;
    }
  }
  return implode(' ', $text);
}

echo removeDuplicateWords($text);