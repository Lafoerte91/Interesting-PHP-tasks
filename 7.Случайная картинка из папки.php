<?php 
session_start();

// Папка, где хранятся изображения
$imageFolder = './images/';

// Получаем список файлов в папке
$imageFiles = glob($imageFolder . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

// Если у пользователя еще нет сохраненной картинки, выбираем случайную и сохраняем в сессию
if(!isset($_SESSION['random_image'])) {
  $randomImage = $imageFiles[array_rand($imageFiles)];
  $_SESSION['random_image'] = $randomImage;
} else {
  $randomImage = $_SESSION['random_image'];
}

// Выводим картинку на страницу
echo '<img src="' . $randomImage . '" alt="Random Image">';