<?php
/*
Дан год. Получите год начала и год конца столетия, соответствующий заданному году.
*/
function getCenturyRange($year) {
  $centuryStart = floor($year / 100) * 100; // Вычисляем начало столетия
  $centuryEnd = $centuryStart + 99; // Вычисляем конец столетия

  return json_encode([$centuryStart, $centuryEnd]);
}

echo getCenturyRange(2024). "<br>";
echo getCenturyRange(1991) . '<br>';