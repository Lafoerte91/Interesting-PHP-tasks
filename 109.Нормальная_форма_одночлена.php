<?php 
/*
Дана строка с математическими переменными и степенями, например, такая: 'a^5 * b^2 * a^7 * b^3'. Напишите программу, которая будет приводить это выражение в нормальную форму, в нашем случае вот такую: 'a^12*b^5'.
*/
$expression = 'a^5 * b^2 * a^7 * b^3';

function normalizeExpression($expression) {
  $res = [];
  $expression = explode('*', $expression);

  foreach($expression as $expr) {
    $expr = trim($expr);
    $expr = explode('^', $expr);
    if(isset($res[$expr[0]])) {
      $res[$expr[0]] += intval($expr[1]);
    } else {
      $res[$expr[0]] = intval($expr[1]);
    }
  }
  $result = [];
  foreach($res as $key => $value) {
    array_push($result, "$key^$value");
  }

  return implode('*', $result);
}

echo normalizeExpression($expression);