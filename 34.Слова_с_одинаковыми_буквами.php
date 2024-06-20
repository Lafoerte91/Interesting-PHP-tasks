<?php
/*
Дан текст. Получите массив слов, у которых есть одинаковые буквы.
*/

$text = 'Дан текст. Получите массив слов, у которых есть одинаковые буквы.';
$words = explode(' ', $text);
$identicalLetters = [];
foreach($words as $word) {
  $letters = mb_str_split($word);
  $countLetter = array_count_values($letters);
  foreach($countLetter as $key => $value) {
    if($value > 1) {
      $word = preg_replace("/[^a-zA-Zа-яА-Я]+/u", '',  $word);
      array_push($identicalLetters, $word);
      break;
    }
  }
}

echo '<pre>';
print_r($identicalLetters);
echo '</pre>';