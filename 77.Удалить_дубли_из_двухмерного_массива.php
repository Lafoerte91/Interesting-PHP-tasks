<?php 
/*
Дан двухмерный массив:
  $users = [
    [
      'name' => 'john',
      'surn' => 'smit',
    ],
    [
      'name' => 'john',
      'surn' => 'book',
    ],
    [
      'name' => 'eric',
      'surn' => 'smit',
    ],
  ];
Удалите из этого массива подмассивы-дубли, имеющие совпадение по заданному полю, в нашем случае, по name или surn.
*/
$users = [
  [
    'name' => 'john',
    'surn' => 'smit',
  ],
  [
    'name' => 'john',
    'surn' => 'book',
  ],
  [
    'name' => 'eric',
    'surn' => 'smit',
  ],
];

function removeDuplicates($users, $field) {
  $uniqueUsers = []; // Массив для уникальных пользователей
  $seenValues = []; // Массив для проверки дубликатов

  foreach ($users as $user) {
    $value = $user[$field];

    if(!in_array($value, $seenValues)) {
      $uniqueUsers[] = $user;
      $seenValues[] = $value;
    }
  }
  return $uniqueUsers;
}

// Удаление дубликатов по полю 'name'
$uniqueUsersByName = removeDuplicates($users, 'name');

echo "Уникальные пользователи по полю 'name':<br>";

print_r($uniqueUsersByName);
