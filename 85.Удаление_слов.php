<?php 
/*
Удалите одной регуляркой все слова из предложения, содержащие две одинаковые следующие друг за другом буквы.
*/
function deleteWords($str) {
  $pattern = '/\b\w*(\w)\1\w*\b/u'; 

  return preg_replace($pattern,  '',  $str);
}

$sentence = "Слова - исключения: оловянный, деревянный, стеклянный";

echo deleteWords($sentence);