<?php 
/*
Дана дата в формате '2025-12-31'. Проверьте, что эта дата корректная.
*/
function isCorrectDate($date) {
  $year = mb_substr($date, 0, 4);
  $month = mb_substr($date, 5, 2);
  $day = mb_substr($date, 8, 2);

  // Проверка корректности года
  if(!is_numeric($year) || $year < 1 || $year > 9999) {
    return false;
  }
  // Проверка корректности месяца
  if(!is_numeric($month) || $month < 1 || $month > 12) {
    return false;
  }
  // Проверка корректности дня
  if(!is_numeric($day) || $day < 1 || $day > 31) {
    return false;
  }
  // Дополнительная проверка: корректность количества дней в месяце
  if($month == 2) {
// Февраль: максимум 29 дней в високосном году
    $max_days = ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) ? 29 : 28;
    if($day > $max_days) {
      return false;
    }
  } elseif(in_array($month, [04, 06, 09, 11])) { // Месяцы с 30 днями
    if($day > 30) {
      return false;
    }
  }

  // Если все проверки пройдены, дата корректна
  return true;
}

echo isCorrectDate('2025-12-31');