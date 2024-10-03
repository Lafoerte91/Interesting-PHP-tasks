<?php 
/*
Даны два промежутка, например, ['2025-03-11', '2025-10-30'] и ['2025-05-11', '2026-12-31']. Эти промежутки пересекаются. Получите даты начала и конца пересечения.
*/
function intersection($arr1, $arr2) {
  $start1 = new DateTime($arr1[0]);
  $end1 = new DateTime($arr1[1]);
  $start2 = new DateTime($arr2[0]);
  $end2 = new DateTime($arr2[1]);
  $res1 = [];
  $res2 = [];
  $result = [];

  while($start1 <= $end1) {
    array_push($res1, $start1->format('Y-m-d'));
    $start1 = $start1->modify('+1 day');
  }
  while($start2 <= $end2) {
    array_push($res2, $start2->format('Y-m-d'));
    $start2 = $start2->modify('+1 day');
  }

  foreach($res1 as  $value) {
    if(in_array($value, $res2)) {
      array_push($result, $value);
    }
  }

  return json_encode([min($result), max($result)]);
}

echo intersection(['2025-03-11', '2025-10-30'], ['2025-05-11', '2026-12-31']);