<?php 
/*
Дано некоторое число:
$num = 1234567890;
Выведите это число прописью:
'
один миллиард двести тридцать четыре миллиона
пятьсот шестьдесят семь тысяч восемсот девяносто
'
Ваш код, конечно же, должен быть универсальным и работать для любых чисел в пределах миллиардов.
*/
function numberToWords($number) {
  $words = array(
      'ноль',
      'один',
      'два',
      'три',
      'четыре',
      'пять',
      'шесть',
      'семь',
      'восемь',
      'девять',
      'десять',
      'одиннадцать',
      'двенадцать',
      'тринадцать',
      'четырнадцать',
      'пятнадцать',
      'шестнадцать',
      'семнадцать',
      'восемнадцать',
      'девятнадцать'
  );

  $tens = array(
      'двадцать',
      'тридцать',
      'сорок',
      'пятьдесят',
      'шестьдесят',
      'семьдесят',
      'восемьдесят',
      'девяносто'
  );

  $hundreds = array(
      '',
      'сто',
      'двести',
      'триста',
      'четыреста',
      'пятьсот',
      'шестьсот',
      'семьсот',
      'восемьсот',
      'девятьсот'
  );

  $thousands = array(
      '',
      'тысяча',
      'миллион',
      'миллиард'
  );

  $numParts = explode('.', $number);
  $integerPart = (int)$numParts[0];
  $fractionalPart = isset($numParts[1]) ? (int)$numParts[1] : 0;

  if ($integerPart == 0) {
      return $words[0];
  }

  $result = '';

  $i = 0;
  while ($integerPart > 0) {
      $chunk = $integerPart % 1000;
      
      if ($chunk != 0) {
          $result = $hundreds[$chunk / 100] . ($chunk % 100 < 20 ? ($chunk < 100 ? '' : ' ') . $words[$chunk % 100] : ($chunk % 10 != 0 ? ($chunk < 100 ? '' : ' ') . $tens[($chunk % 100) / 10 - 2] : '') . ($chunk % 10 != 0 ? ($chunk % 100 < 20 ? '' : ' ') . $words[$chunk % 10] : '')) . ($i == 0 ? '' : ' ' . $thousands[$i]) . ($result == '' ? '' : ', ') . $result;
      }

      $integerPart = (int)($integerPart / 1000);
      $i++;
  }

  if ($fractionalPart > 0) {
      $result .= ', десять ';

      if ($fractionalPart < 20) {
          $result .= $words[$fractionalPart];
      } else {
          $result .= $tens[($fractionalPart / 10) - 2] . ($fractionalPart % 10 != 0 ? '-' . $words[$fractionalPart % 10] : '');
      }
  }

  return $result;
}

$num = 1234567890;
echo numberToWords($num);

