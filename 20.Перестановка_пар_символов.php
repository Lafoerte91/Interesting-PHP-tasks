<?php 
/*
Дана строка '12345678'. Сделайте из нее '21436587'. Строка, конечно же, может быть любой.
*/
$string = '12345678';
$newString = '';

for ($i = 1; $i < strlen($string); $i += 2) {
  $newString .= $string[$i];
  $newString .= $string[$i-1];
}

echo $newString;