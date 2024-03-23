<?php 
/* Определите дату ближайшей масленницы (последнее воскресенье зимы). Если в этом году она уже была - покажите за следующий год. */

// Получаем текущую дату
$currentDate = new DateTime();

// Получаем текущий год
$currentYear = $currentDate->format('Y');

// Создаем объект DateTime для 1 марта текущего года
$firstDayOfMarch = new DateTime($currentYear . '-03-01');

// Определяем день недели для 1 марта текущего года
$dayOfWeek = $firstDayOfMarch->format('w');

// Вычисляем количество дней, которые нужно прибавить к 1 марта, чтобы получить последнее воскресенье зимы
$daysToAdd = 7 - $dayOfWeek;

// Создаем объект DateTime для последнего воскресенья зимы
$lastSundayOfWinter = $firstDayOfMarch->modify('+' . $daysToAdd . ' days');

// Проверяем, прошла ли масленница в этом году
if($currentDate > $lastSundayOfWinter) {
  // Если масленница уже была в этом году, увеличиваем текущий год на 1
  $currentYear++;

  // Создаем объект DateTime для 1 марта следующего года
  $firstDayOfMarch = new DateTime($currentYear . '-03-01');

  // Определяем день недели для 1 марта следующего года
  $dayOfWeek = $firstDayOfMarch->format('w');

  // Вычисляем количество дней, которые нужно прибавить к 1 марта следующего года, чтобы получить последнее воскресенье зимы
  $daysToAdd = 7 - $dayOfWeek;

  // Создаем объект DateTime для последнего воскресенья зимы
  $lastSundayOfWinter = $firstDayOfMarch->modify('+' . $daysToAdd . ' days');
}

// Выводим дату последнего воскресенья зимы
echo 'Дата ближайшей масленницы: ' . $lastSundayOfWinter->format('Y-m-d');