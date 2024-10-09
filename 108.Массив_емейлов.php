<?php 
/*
Дан текст со словами, среди которых встречаются емейлы. Напишите скрипт, который получит массив этих емейлов.
*/
$text = 'Вот и я о том же. Может, стоит завести новый, на этот раз, andrey.petrov@yandex.ru? - спросила она, улыбаясь. - А то вдруг придет письмо от noreply@amazon.com с сообщением, что ты выиграл миллион долларов!';

function searchEmail($text) {
  $res = [];
  $text = explode(' ', $text);
  foreach($text as $txt) {
    $txt_arr = mb_str_split($txt);
    if(in_array('@', $txt_arr)) {
      $txt = str_replace('?', '', $txt);
      array_push($res, $txt);
    }
  }

  return json_encode($res);
}

echo searchEmail($text);