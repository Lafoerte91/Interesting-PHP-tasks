<?php 
/*
Дан текст. Напишите функцию, которая получит первые N слов из этого текста.
*/
$text = 'Дан текст. Напишите функцию, которая получит первые N слов из этого текста.';

function getFirstNWords($text, $n) {
  $text = explode(' ', $text);
  $text = array_slice($text, 0, $n);

  return implode(' ', $text);
}

echo getFirstNWords($text, 5);