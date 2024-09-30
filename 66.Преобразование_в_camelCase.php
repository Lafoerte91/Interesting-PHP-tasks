<?php 
/*
Напишите функцию, которая преобразует строки вида var_php_test в varPhpTest.
*/  
function camelCase($str) {
  $str = ucwords($str, '_');
  $str = str_replace('_', '', $str);

  return $str;
}

echo camelCase('var_php_test');