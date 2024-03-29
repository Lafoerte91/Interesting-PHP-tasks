<?php 
/*
Дана строка с маленькими буквами. Сделайте заглавными половину случайных букв этой строки, игнорируя пробелы.
*/
function capitalizeRandomLetters($str) {
  $length = mb_strlen($str, 'UTF-8');
  $capitalizeCount = $length / 2; // Определяем количество букв, которые нужно сделать заглавными 
  // Преобразуем строку в массив символов
  $letters = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);
  // Создаем массив с индексами всех букв в строке, игнорируя пробелы
  $letterIndexes = array_keys(array_filter($letters, function($char) {
    return $char !== ' ';
  }));
  // Получаем случайные индексы для заглавных букв
  $randomIndexes = array_rand($letterIndexes, $capitalizeCount);
  // Делаем случайные буквы заглавными
  foreach ($randomIndexes as $index) {
    $letters[$letterIndexes[$index]] = mb_strtoupper($letters[$letterIndexes[$index]], 'UTF-8');
  }
  $result = implode('', $letters);
  return $result;
}

// Пример использования
$str = 'эта строка содержит некоторые буквы';

echo capitalizeRandomLetters($str);
