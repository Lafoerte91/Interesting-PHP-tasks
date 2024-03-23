<?php 
/*
Напишите скрипт, который выводит календирик текущего месяца (квадратный, с днями недели).
*/

// Получаем текущую дату: месяц, год и количество дней в текущем месяце
$month = date('n');
$year = date('Y');
$days_in_month = date('t');

// Получаем первый день недели текущего месяца
$first_day = date('w', mktime(0, 0, 0, $month, 1, $year));

// Массив с названиями дней недели
$days_of_week = array('Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс');

// Выводим заголовок таблицы
echo "<table border='1'>";
echo "<tr>";
foreach ($days_of_week as $day) {
    echo "<th>$day</th>";
}
echo "</tr>";

// Выводим пустые ячейки для дней до начала месяца
echo "<tr>";
for ($i = 0; $i < $first_day; $i++) {
    echo "<td></td>";
}

// Выводим дни месяца в календаре
$current_day = 1;
while ($current_day <= $days_in_month) {
    // Новая строка через каждые 7 дней
    if ($first_day % 7 == 0) {
        echo "</tr><tr>";
    }

    echo "<td>$current_day</td>";
    $current_day++;
    $first_day++;
}

// Выводим пустые ячейки для оставшихся дней месяца
while ($first_day % 7 != 0) {
    echo "<td></td>";
    $first_day++;
}

echo "</tr>";
echo "</table>";


