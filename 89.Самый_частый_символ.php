<?php 
/*
Дан текст. Найдите символ, который наиболее часто встречается в этом тексте.
*/
function mostFrequentSymbol($text) {
  $max = 0;
  $symbol = $text[0];
  $text = mb_str_split($text);
  $countSymbols = array_count_values($text);

  foreach($countSymbols as $key => $value) {
    if($value > $max) {
      $max = $value;
      $symbol = $key;
    }
  }

  if($symbol == ' ') {
    return 'Пробел';
  }

  return $symbol;
}

echo mostFrequentSymbol('The quick brown fox jumps over the llazy dog');