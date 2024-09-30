<?php 
/*
Дано число. Выведите на экран все возможные перестановки его цифр.
*/
function getPermutations($number) {
    $digits = str_split($number);
    $count = count($digits);
    $permutations = [];

    // Инициализируем массив перестановок
    $permutations[] = $digits;

    // Цикл по каждой цифре (кроме первой)
    for ($i = 1; $i < $count; $i++) {
        $newPermutations = [];
        foreach ($permutations as $permutation) {
            // Цикл по каждой позиции слева от текущей цифры
            for ($j = 0; $j < $i; $j++) {
                // Создаем копию текущей перестановки
                $newPermutation = $permutation;
                // Меняем местами текущую цифру с цифрой на позиции j
                $temp = $newPermutation[$j]; //  1
                $newPermutation[$j] = $newPermutation[$i]; // 223
                $newPermutation[$i] = $temp; // 213
                // Добавляем новую перестановку в массив
                $newPermutations[] = $newPermutation;
            }
        }
        // Объединяем старые и новые перестановки
        $permutations = array_merge($permutations, $newPermutations);
    }

    // Преобразуем массивы цифр в строки
    $result = array_map('implode', array_fill(0, count($permutations), ''), $permutations);

    return $result;
}

$number = 123; // Замените на ваше число
$permutations = getPermutations($number);

echo "Перестановки цифр числа $number: <br>";
foreach ($permutations as $permutation) {
    echo $permutation . "<br>";
}

