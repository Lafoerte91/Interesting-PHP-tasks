<?php 
/*
Дана папка, в ней лежат картинки с расширением png и другие файлы. Также в ней лежат подпапки с аналогичным содержимым. Покажите пользователю одну случайную картинку из этой папки.
*/
function getRandomPngimage($directory) {
  $images = [];
  // Рекурсивная функция для поиска файлов
  $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory)); 

  foreach ($iterator as $file) {
    if($file->isFile() && strtolower($file->getExtension() === 'png')) {
      $images[] = $file->getPathname();
    }
  }

  // Если найдены изображения, выбираем случайное
  if(!empty($images)) {
    return $images[array_rand($images)];
  } else {
    return null; // Если изображения не найдены
  }
}

// Укажите путь к вашей папке
$directoryPath = '/Projects';
$randomImage = getRandomPngimage($directoryPath);

if($randomImage) {
  $randomImage = realpath($randomImage);
  $randomImage = str_replace('\\', '/', $randomImage);
  echo '<img src="' . htmlspecialchars($randomImage) . '" alt="Random Image">';
} else {
  echo 'No images found in the directory.';
}