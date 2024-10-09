<?php 
/*
Дан текст. Напишите функцию, которая получит первые N предложений из этого текста.
*/
$text = 'Дан текст. Напишите функцию, которая получит первые N предложений из этого текста.';

function getFirstNsentences($text, $n) {
  $sentences = explode('.', $text);
  $result = [];
  for ($i = 0; $i < $n; $i++) {
    $result[] = $sentences[$i];
  }
  return implode('.', $result) . ".";
}

echo getFirstNsentences($text, 1);