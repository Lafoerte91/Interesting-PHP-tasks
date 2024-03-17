<?php 
/*
Даны две строки. Выведите на экран только те слова, которые содержатся в обеих строках.
*/
$stringOne = 'Если сгенерируется просто точка "." попробуй нажать кнопку еще раз, эта ошибка часто встречается.';
$stringTwo = 'Если сгенерируется просто точка "." то нажми на кнопку еще раз.';

$stringOne = explode(' ', $stringOne);
$stringTwo = explode(' ', $stringTwo);

foreach ($stringOne as $word) {
  if(in_array($word, $stringTwo)) {
    echo "$word <br>";
  }
}

