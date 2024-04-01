<?php 
/*
Дан текст. Найдите самое часто встречающееся слово в этом тексте.
*/
$text = "The quick brown fox jumped over the lazy lazy lazy dog.";
$countWords = [];

foreach (explode(' ', $text) as $word) {
  $countWords[$word] = isset($countWords[$word]) ? $countWords[$word] + 1 : 1;
}

arsort($countWords); // сортируем по убыванию значения

echo array_keys($countWords)[0]; // выводим первый ключ