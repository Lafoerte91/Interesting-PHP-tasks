<?php
/*
Сделайте функцию, которая будет проверять, являются ли два числа дружественными.
*/
function isFriendly($m, $n) {
  $sumM = 0;
  $sumN = 0;

  for($i=1; $i<$m; $i++) {
    if($m % $i == 0) {
      $sumM += $i;
    }
  }

  for($j=1; $j<$n; $j++) {
    if($n % $j == 0) {
      $sumN += $j;
    }
  } 

  if(($sumM == $n) && ($sumN == $m)) { 
    return 'true';
  } else {
    return 'false';
  }
}

echo isFriendly(220, 284) . '<br>';
echo isFriendly(6, 5) . '<br>';