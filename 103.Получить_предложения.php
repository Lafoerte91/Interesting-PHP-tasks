<?php 
/*
Дан текст. Разбейте его на массив предложений.
*/
$text = 'Дан текст. Разбейте его на массив предложений.';

function arrOffers($text) {
  $text = explode('.', $text);

  return $text;
}

var_dump(arrOffers($text));