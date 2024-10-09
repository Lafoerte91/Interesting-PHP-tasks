<?php 
/*
Дана строка с текстом, среди которого встречается время в формате '12:59:59'. Получите из этой строки массив, содержащий время, в котором минуты равны секундам.
*/
$text = 'Сегодня вы можете встретить нас в 12:59:59, а завтра в 08:30:15. Не опоздайте на встречу в 23:45:01.';

function minutesAndSeconds($str) {
  $pattern = '/[0-9]{2}:[0-9]{2}:[0-9]{2}/u';

  preg_match_all($pattern, $str, $matches);

  $res = [];

  foreach($matches[0] as $match) {
    $matchCopy = explode(':', $match);
    if($matchCopy[1] == $matchCopy[2]) {
      array_push($res, $match);
    }
  }

  return json_encode($res);
}

echo minutesAndSeconds($text);
