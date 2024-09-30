<?php
/*
Реализуйте функцию, которая будет принимать два целых числа, а возвращать результат деления одного на второе. При этом, если получается периодичская дробь, то ответ следует вывести примерно в таком виде: 1.(428571).
*/
function resDivision($num1, $num2) {
  if($num2 == 0) {
    $res = 'Деление на ноль невозможно';
    return $res . "\n";
  } 

  if(!isPowerOff(2, $num2) && !isPowerOff(5, $num2)) {
    $res = $num1 / $num2;
    $res = strval($res);
    $res = explode('.', $res);
    $res = $res[0] . '.' . '(' . $res[1] . ')';

    return $res . "\n";
  } 

  return $num1 / $num2;
}

function isPowerOff($base, $number) {
  if($number < 0) {
    return false;
  }

  while($number % $base == 0) {
    $number /= $base;
  }

  return  $number == 1;
}

echo resDivision(1, 3);
echo resDivision(5, 2);