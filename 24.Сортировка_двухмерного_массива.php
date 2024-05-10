<?php 
/*
Дан двухмерный массив:
[
  [
    'name' => 'user3',
    'age' => 31,
    'salary' => 100,
  ],
  [
    'name' => 'user1',
    'age' => 32,
    'salary' => 300,
  ],
  [
    'name' => 'user2',
    'age' => 33,
    'salary' => 200,
  ],
]

Выполните сортировку этого массива по заданному полю (по имени, возрасту или зарплате).
*/
$users = [
  [
    'name' => 'user3',
    'age' => 31,
    'salary' => 100,
  ],
  [
    'name' => 'user1',
    'age' => 32,
    'salary' => 300,
  ],
  [
    'name' => 'user2',
    'age' => 33,
    'salary' => 200,
  ],
];

$sort = 'age';

if ($sort == 'age') {
  usort($users, function ($a, $b) {
    return $a['age'] - $b['age'];
  });
}

print_r($users);

