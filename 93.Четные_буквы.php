<?php 
/*
Дано два слова. Сделайте так, чтобы эти слова поменялись своими четными буквами.
*/
function changeWord($word1, $word2) {
  $word1 = str_split($word1);
  $word2 = str_split($word2);

  for ($i = 0; $i < count($word1); $i++) {
    if ($i % 2 == 0) {
      $letter = $word1[$i];
      $word1[$i] = $word2[$i];
      $word2[$i] = $letter;
    }
  }

  $word1 = implode('', $word1);
  $word2 = implode('', $word2);

  return json_encode([$word1, $word2]);
}

echo changeWord('hello', 'world');