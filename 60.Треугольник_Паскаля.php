<?php
/*
Нарисуйте в браузере треугольник Паскаля произвольного размера
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Треугольник Паскаля</title>
  <style>
table {
  border-collapse: collapse;
  margin: 50px auto;
}

td {
  border: 1px solid black;
  padding: 10px;
  text-align: center;
}
</style>
</head>
<body>

<?php
function pascalTriangle($rows) {
  // Создаем двумерный массив для треугольника Паскаля
  $triangle = [];
  for ($i = 0; $i < $rows; $i++) {
    $triangle[$i] = []; // Создаем строку в треугольнике Паскаля
  }
  // Заполняем массив значениями
  for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j <= $i; $j++) {
      if($j == 0 || $j == $i) {
        // Крайние элементы всегда равны 1
        $triangle[$i][$j] = 1;
    } else {
      // Вычисляем значение элемента по формуле
      $triangle[$i][$j] = $triangle[$i - 1][$j - 1] + $triangle[$i - 1][$j]; // Используем формулу треугольника Паскаля
    }
  }
  return $triangle;
}
}

// Запрашиваем размер треугольника у пользователя
$rows = (int)readline('Enter the number of rows: ');

// Генерируем треугольник Паскаля
$triangle = pascalTriangle($rows);

// Выводим треугольник в виде HTML-таблицы
echo '<table>';
for ($i = 0; $i < $rows; $i++) {
  echo '<tr>';
  for ($j = 0; $j <= $i; $j++) {
    echo '<td>' . $triangle[$i][$j] . '</td>';
  }
  echo '</tr>';
}
echo '</table>';

?>
</body>
</html>

