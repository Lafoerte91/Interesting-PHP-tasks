<?php 
/*
Найдите, какое число было 100 дней назад.
*/
// Создаем объект DateTime для текущей даты
$currentDate = new DateTime();
// Вычитаем 100 дней
$pastDate = $currentDate->modify('-100 days');
// Получаем отформатированную дату
$pastDate = $pastDate->format('Y-m-d');

echo $pastDate; // Выведет дату, на 100 дней раньше текущей