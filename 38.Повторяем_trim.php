<?php
/*
Сделайте аналог функции trim.
*/
$text = '        Дан текст. Сделайте       аналог функции trim.        ';
function my_trim($text) {
  $text = preg_replace('/\s+/', ' ', $text);
  if(mb_substr($text, 0, 1) == ' ') {
    $text = mb_substr($text, 1); 
  }
  if(mb_substr($text, -1) == ' ') {
    $text = mb_substr($text, 0, -1);
  }
  return $text;
}

$res =  my_trim($text);
echo $res;