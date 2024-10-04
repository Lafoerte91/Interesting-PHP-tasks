<?php 
/*
Дан текст. Подсчитайте количество переносов строк в этом тексте.
*/
function countLineWrapping($text) {
  $text = explode("\n", $text);

  return count($text) - 1;
}

echo countLineWrapping("Это текст с\nпереносом строки.\n\nА это ещё один перенос.");