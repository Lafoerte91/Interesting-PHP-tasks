<?php 
/*
Дан массив товаров с ценами. Дана сумма. Выведите все возможные комбинации товаров, которые можно купить на эту сумму.
*/
$products = [
  [
      'name' => 'Товар 1',
      'price' => 100,
  ],
  [
      'name' => 'Товар 2',
      'price' => 50,
  ],
  [
      'name' => 'Товар 3',
      'price' => 200,
  ],
];
$sum = 200;

function findCombinations($items, $target, $currentCombinations = [], $startIndex = 0) {
  // Если сумма текущей комбинации равна целевой сумме, выводим комбинацию
  if($target === 0) {
    echo implode(' + ', $currentCombinations) . "<br>";
    return;
  }
  // Если сумма превышает целевую сумму, возвращаемся
  if($target < 0) {
    return;
  }
  // Итерируемся по элементам массива
  for($i = $startIndex; $i < count($items); $i++) {
    // Добавляем текущий товар в комбинацию
    $currentCombinations[] = $items[$i]['name'];
    // Рекурсивно вызываем функцию с обновленной целевой суммой и индексом
    findCombinations($items, $target - $items[$i]['price'], $currentCombinations, $i );
    // Удаляем последний добавленный элемент для поиска других комбинаций
    array_pop($currentCombinations);
  }
}

findCombinations($products, $sum);