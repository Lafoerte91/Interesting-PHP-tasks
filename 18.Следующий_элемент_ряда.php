<?php 
/*
Дан ряд: a, b, c ,d ... x, y, z , aa, ab, ac, ... ay, az, ba, bb, ... bz, ... aaz.. Напишите функцию, которая получит следующий элемент по предыдущему.
*/
function getNextElement($str) {
  // Если строка пустая, начинаем с 'a'
  if($str == '')  {
    return 'a';
  }
  // Разбиваем строку на массив символов
  $chars = str_split($str);
  $lastChar = end($chars);
  // Проверяем, нужно ли увеличить последний символ
  if($lastChar !== 'z') {
    $chars[count($chars) - 1] = chr(ord($lastChar) + 1);
  } else {
    // Обработка случая, когда последний символ 'z'
    $i = count($chars) - 1;
    // Находим первый символ справа, который не 'z' и увеличиваем его
    while($chars[$i] == 'z') {
      $chars[$i] = 'a';
      $i--;
    }
    // Увеличиваем символ на единицу
    if($chars[$i] !== 'z') {
      $chars[$i] = chr(ord($chars[$i]) + 1);
    } else {
      // Если все символы 'z', добавляем 'a' слева
      array_unshift($chars, 'a');
    }
  }
  // Объединяем символы обратно в строку
  $result = implode('', $chars);
  return $result;
}

// Пример использования
echo getNextElement('a') . "<br>"; // Ожидаем 'b'
echo getNextElement('az') . "<br>"; // Ожидаем 'ba'
echo getNextElement('aaz'); // Ожидаем 'aba'