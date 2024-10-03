<?php 
/*
Определите, что год находится в интервале от 1900 до 2100 с помощью одного только регулярного выражения.
*/
function checkYear($year) {
  return preg_match('/^19[0-9]{2}$|^20[0-9]{2}$/', $year);
}

echo checkYear('2024') ? 'true' : 'false';
echo '<br>';
echo checkYear('1899') ? 'true' : 'false';