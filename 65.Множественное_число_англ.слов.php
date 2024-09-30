<?php 
/*
Напишите функцию, которая из единственного числа английского существительного делает множественное. Не забудьте про слова-исключения.
*/
function pluralize($word) {
  // Массив исключений
  $exceptions = [
    "child" => "children",
    "foot" => "feet",
    "tooth" => "teeth",
    "person" => "people",
    "mouse" => "mice",
    "goose" => "geese",
    "cactus" => "cacti",
    "focus" => "foci",
    "fungus" => "fungi",
    "nucleus" => "nuclei",
    "syllabus" => "syllabi",
    "analysis" => "analyses",
    "thesis" => "theses",
    "crisis" => "crises",
  ];

  // Проверяем наличие слова в массиве исключений
  if(array_key_exists($word, $exceptions)) {
    return "Слово $word не может быть множественным, так как является исключением." . "<br>";
  }

  // Общие правила формирования множественного числа
  $lastLetter = strtolower(mb_substr($word, -1));
  $lastTwoLetters = strtolower(mb_substr($word, -2));

  if($lastTwoLetters == "ch" || $lastTwoLetters == "sh" || $lastTwoLetters == "zz" || $lastLetter == "s" || $lastLetter == "x") {
    return $word . "es" . "<br>";
  } elseif($lastLetter == "y" && !in_array(strtolower(mb_substr($word, -2, 1)), ["a", "e", "i", "o", "u", "y"])) {
    return mb_substr($word, 0, -1) . "ies" . "<br>";
  } elseif($lastLetter == "f") {
    return mb_substr($word, 0, -1) . "ves" . "<br>";
  } elseif($lastTwoLetters == "fe") {
    return mb_substr($word, 0, -2) . "ves" . "<br>";
  }

  // По умолчанию добавляем "s"
  return $word . "s" . "<br>";
}

echo pluralize("child");
echo pluralize("bush");
echo pluralize("car");
echo pluralize("mouse");
echo pluralize("leaf");
echo pluralize("coffee");
echo pluralize("knife");