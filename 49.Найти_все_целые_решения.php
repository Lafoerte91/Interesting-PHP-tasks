<?php
/*
Найдите все ЦЕЛЫЕ решения уравнения x^y = y^x.
*/

function findIntegerSolutions($n) {
  $solutions = [];
  for ($x = 1; $x <= $n; $x++) { // цикл по всем возможным значениям x
    for ($y = 1; $y <= $n; $y++) { // цикл по всем возможным значениям y
      if ($x ** $y == $y ** $x) { // проверка условия
        $solutions[] = [$x, $y]; // запись решения
      }
    }
  }
  return $solutions;
}

echo '<pre>';
print_r(findIntegerSolutions(100));