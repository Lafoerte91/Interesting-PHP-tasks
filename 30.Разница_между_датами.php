<?php 
/*
Даны две даты в формате год-месяц-день. Найдите разницу в днях между этими датами.
*/

$date1 = '2020-01-01';
$date2 = '2020-01-05';

$timestamp1 = strtotime($date1); // strtotime — Преобразует строку с датой в UNIX-время
$timestamp2 = strtotime($date2);

$days = abs($timestamp2 - $timestamp1); // abs — Возвращает абсолютное значение
$days = floor($days / 86400); // 86400 — Количество секунд в одном дне, flor - округляет в меньшую сторону

echo $days;