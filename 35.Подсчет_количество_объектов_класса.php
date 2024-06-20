<?php
/*
Дан ООП класс. Сделайте так, чтобы этот класс считал количество своих объектов.
*/

class MyClass {
  // Статическое свойство для хранения количества объектов
  private static int $objectCount = 0;
  // Конструктор класса
  public function __construct() {
    // Увеличиваем счетчик при создании объекта
    self::$objectCount++;
  }
  // Деструктор класса
  public function __destruct() {
    // Уменьшаем счетчик при уничтожении объекта
    self::$objectCount--;
  }
  // Статический метод для получения количества объектов
  public static function getObjectCount():int {
    return self::$objectCount;
  }
}

// Создаем несколько объектов класса
$object1 = new MyClass();
$object2 = new MyClass();
$object3 = new MyClass();

// Выводим количество объектов
echo "Количество объектов: " . MyClass::getObjectCount() .  PHP_EOL; // Вывод: Количество объектов: 3

// Удаляем один объект
unset($object1);

// Выводим количество объектов
echo "Количество объектов: " . MyClass::getObjectCount() .  PHP_EOL; // Вывод: Количество объектов: 2

