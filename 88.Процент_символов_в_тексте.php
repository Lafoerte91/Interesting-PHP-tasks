<?php 
/*
Дан текст. Получите объект, ключами которого будут символы, а значениями - их процентное содержание в тексте.
*/
$text = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod non voluptas iure reprehenderit ab beatae explicabo dolore porro. Veritatis libero perferendis consequatur quos non a possimus sit id dignissimos quidem';

function percentSymbolInText($text) {
  $length = mb_strlen($text);
  $text = mb_str_split($text);
  $countSymbols = array_count_values($text);
  
  foreach($countSymbols as $key => $value) {
    $countSymbols[$key] = round($value * 100 / $length, 2) . '%';
    }

    return json_encode($countSymbols);
  } 

echo percentSymbolInText($text);