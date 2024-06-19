<?php 
/*
Выведите даты ближайших 10-ти вторников.
*/

function getNearestTuesdays($count=10) { // по умолчанию берем 10 вторников
  $tuesdays = [];
  $currentDate = new DateTime(); // создаем текущую дату
  $currentWeekday = (int)$currentDate->format('N'); // получаем текущий день недели в числовом формате
  $daysToTuesday = 2 - $currentWeekday; // вычисляем количество дней до ближайшего вторника
  if($daysToTuesday < 0) { // если текущий день недели больше вторника
    $daysToTuesday += 7; // то вычисляем количество дней до ближайшего вторника
  }
  $currentDate->modify("+$daysToTuesday days"); // увеличиваем текущую дату на количество дней до ближайшего вторника
  for($i = 0; $i < $count; $i++) {
    $tuesdays[] = $currentDate->format('Y-m-d'); // добавляем дату в массив
    $currentDate->modify('+7 days'); // увеличиваем  дату вторника на 7 дней
  }
  return $tuesdays;
}

$NearestTuesdays = getNearestTuesdays();

echo '<pre>';
print_r($NearestTuesdays);
echo '</pre>';