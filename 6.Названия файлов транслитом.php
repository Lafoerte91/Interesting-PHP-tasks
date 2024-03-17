<?php 
/*
Пусть есть папка с файлами, названия которых даны на русском языке. Преобразуйте русский текст в названиях файлов в его транслит.
*/

// Функция для транслитерации строки
function transliterate($text) {
  $converter = array(
    'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
    'е' => 'e', 'ё' => 'e', 'ж' => 'zh', 'з' => 'z', 'и' => 'i',
    'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
    'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
    'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch',
    'ш' => 'sh', 'щ' => 'sch', 'ь' => '', 'ы' => 'y', 'ъ' => '',
    'э' => 'e', 'ю' => 'yu', 'я' => 'ya',
    'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D',
    'Е' => 'E', 'Ё' => 'E', 'Ж' => 'Zh', 'З' => 'Z', 'И' => 'I',
    'Й' => 'Y',  'К' => 'K',  'Л' =>  'L',  'М' =>  'M',
    'Н' =>  'N',  'О' =>  'O',  'П' =>  'P',  'Р' =>  'R',
    'С' =>  'S',  'Т' =>  'T',  'У' =>  'U',  'Ф' =>  'F',
    'Х' =>  'H',  'Ц' =>  'C',  'Ч' =>  'Ch',  'Ш' =>  'Sh',
    'Щ'=>  'Sch','Ь'=>  '',  'Ы'=>  'y','Ъ'=>  '', 
    'Э'=>  'E','Ю'=>  'Yu','Я'=>  'Ya'
);
  // Заменяем символы в строке на их транслитерированные аналоги
  $transliteratedText = strtr($text, $converter);
  return $transliteratedText;
}

// Путь к папке с файлами
$folderPath = 'C:\\Projects';

// Получаем список файлов в папке
$files = scandir($folderPath);

// Проходим по каждому файлу
foreach ($files as $file) {
  // Пропускаем текущий и родительский каталоги
  if($file == '.' || $file == '..') {
    continue;
  }
  // Транслитерируем имя файла
  $transliteratedFileName = transliterate($file);
  // Полный путь к исходному файлу
  $oldFilePath = $folderPath . '/' . $file;
  // Полный путь к новому файлу с транслитерированным именем
  $newFilePath = $folderPath . '/' . $transliteratedFileName;
  // Переименовываем файл
  rename($oldFilePath, $newFilePath);
  echo "Файл $file успешно переименован в $transliteratedFileName <br>";
}
