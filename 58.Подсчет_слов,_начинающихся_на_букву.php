<?php
/*
Напишите функцию, которая подсчитает, сколько слов в строке начинаются на заданную букву.
*/
function countWordsStartingWithLetter($text, $letter) {
  $text = explode(' ', $text);
  $count = 0;
  foreach ($text as $word) {
    if (mb_substr($word, 0, 1) == $letter) {
      $count++;
    }
  }
  return $count;
}

echo "Количество слов, начинающихся на букву 'h': " . countWordsStartingWithLetter('hello world', 'h');