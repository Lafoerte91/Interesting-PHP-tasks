<?php
/*
Дан текст. Найдите все слова, где есть две одинаковые буквы, но не стоящие подряд.
*/
function searchWords($text) {
  $result = [];
  $text = explode(' ', $text);

  foreach ($text as $word) {
    $letters = mb_str_split($word);
    $countLetter = array_count_values($letters);
    foreach ($countLetter as $key => $value) {
      if ($value == 2) {
        $index = mb_strpos($word, $key);
        if($word[$index + 1] !== $key) {
          $symbols  = [' ', '.', ','];
          $word = str_replace($symbols, '', $word);
          array_push($result, $word);
        }
      }
  }
}
  return $result;
}

var_dump(searchWords('Дан текст. Найдите все слова, где есть две одинаковые буквы, но не стоящие подряд.'));