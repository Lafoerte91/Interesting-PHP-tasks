<?php 
/*
Дан текст. Найдите слово состоящее более чем из 3-х букв, которое встречается в этом тексте только один раз.
*/
function countThreeWords($text) {
  $words = preg_split('/\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);
  $words = array_count_values($words);
  foreach ($words as $key => $value) {
    if (strlen($key) > 3 && $value == 1) {
      return $key;
    }
  }
  return  false;
}

echo countThreeWords('Я люблю программирование, но иногда оно бывает сложным, например, когда нужно найти решение задачи.');