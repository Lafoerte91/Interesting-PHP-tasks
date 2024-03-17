<?php 
/*
Дан текст. Сделайте заглавной первую букву каждого предложения в этом тексте.
*/
$text = 'Заглавные буквы в начале предложения.';

function upperText($text) {
  $text = explode(' ', $text); 
  $result = [];
  foreach ($text as $word) {
    $word = mb_convert_case($word, MB_CASE_TITLE, "UTF-8"); // преобразует первую букву слова в заглавную
    $result[] = $word;
  }
  return implode(' ', $result);
}

echo upperText($text);