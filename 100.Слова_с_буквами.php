<?php 
/*
Дан текст. Найдите все слова, где есть заданная буква, но не стоящая в начале или в конце слова.
*/
$text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, rem!';

function searchLetterInWord($text, $letter) {
  $result = [];
  $text = explode (' ', $text);

  foreach ($text as $word) {
    $word = str_replace('.', '', $word);
    $word = str_replace(',', '', $word);
    $word_copy = mb_substr($word, 1, -1);
    if(mb_strpos($word_copy, $letter) != false) {
      array_push($result, $word);
    }
  }

  return json_encode($result);
}

echo searchLetterInWord($text, 's');

