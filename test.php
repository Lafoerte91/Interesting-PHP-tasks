<?php
/*
Напиши метод, который принимает на вход строку и меняет порядок букв в каждом слове на обратный с сохранением регистра и пунктуации.
*/
function reversedString($string) {
    $string = explode(' ', $string);
    foreach($string as $key => $word) {
        $word = preg_split('//u', $word, null, PREG_SPLIT_NO_EMPTY);
        $word = implode('', array_reverse($word));
        $string[$key] = $word;
    }
    $res = implode(' ', $string);
    return $res;
}

$string = "Хочу стать веб-разработчиком";
$result = reversedString($string);

echo $result;

// тестирование
use PHPUnit\Framework\TestCase;

class ReverseCharactersTest extends TestCase
{
    public function testRevertCharacters()
    {
        $inputString = "Привет! Давно не виделись.";
        $expectedResult = "Тевирп! Онвад ен ьсиледив.";
        
        $this->assertEquals($expectedResult, reversedString($inputString));
    }
}

$test = new ReverseCharactersTest();

$test->testRevertCharacters();
