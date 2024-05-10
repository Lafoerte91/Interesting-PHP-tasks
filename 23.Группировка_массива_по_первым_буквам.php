<?php 

/*
$arr = [
  'axx', 'bxx', 'cxx',
  'ayy', 'byy', 'cyy',
  'azz', 'bzz', 'czz',
];

Преобразуйте этот массив в двухмерный, в котором ключами будут первые буквы слов, а значениями массивы слов, начинающихся на эти буквы:
[
  'a' => [
    'axx', 'ayy', 'azz',
  ],
  'b' => [
    'bxx', 'byy', 'bzz',
  ],
  'c' => [
    'cxx', 'cyy', 'czz',
  ],
]
*/
$arr = [
  'axx', 'bxx', 'cxx',
  'ayy', 'byy', 'cyy',
  'azz', 'bzz', 'czz',
];
$result = [];

for ($i = 0; $i < count($arr); $i++) {
    $result[$arr[$i][0]][] = $arr[$i];
}

print_r($result);

