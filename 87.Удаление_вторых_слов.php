<?php 
/*
Дана строка. Удалите из нее каждое второе слово.
*/
function deleteTwoWord($text) {
  $res = [];
  $text = explode(' ', $text);

  for($i = 0; $i < count($text); $i+=2) {
    array_push($res, $text[$i]);
  }

  return implode(' ', $res);
}

echo deleteTwoWord('С другой стороны укрепление и развитие структуры обеспечивает участие в формировании систем массового участия.');
