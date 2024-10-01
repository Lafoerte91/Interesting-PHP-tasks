<?php 
/*
Сделайте функцию, которая выводит случайное число от 1 до 100. При этом вызовы функции не должны выдавать два одинаковых числа подряд.
*/
class randomNumberGenerator {
  private $lastNumber = null;

  public function getRandomNumber(): int {
    do {
      $randomNumber = rand(1, 100);
    } while($randomNumber == $this->lastNumber); // Проверяем, не совпадает ли текущее число с предыдущим

    $this->lastNumber = $randomNumber;
    
    return $randomNumber;
  }
}

// Пример использования
$generator = new randomNumberGenerator();

for($i = 0; $i < 10; $i++) {
  echo $generator->getRandomNumber() . "\n";
}