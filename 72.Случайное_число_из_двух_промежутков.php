<?php 
/*
Сгенерируйте случайное целое число из промежутка от 10 до 30 и от 50 до 80.
*/
function my_rand() {
  $rand1 = rand(10, 30);
  $rand2 = rand(50, 80);

  return "Случайное целое число из промежутка от 10 до 30: $rand1, от 50 до 80: $rand2";
}

echo my_rand();