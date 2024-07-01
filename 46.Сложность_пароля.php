<?php
/*
Проверьте сложность пароля. Сложный пароль - это пароль с маленькими латинскими, большими латинскими буквами, цифрами и спецсимволами. Придумайте свои критерии, например, не должно идти несколько одинаковых символов подряд и так далее.
При решении задачи указывайте свои критерии также.
*/

$password = '12345eF!wcwdew3';

function checkedPass($password) {
  if(preg_match('/[a-z]/', $password ) && preg_match('/[A-Z]/', $password ) && preg_match('/[0-9]/', $password ) && preg_match('/[^a-zA-Z0-9]/', $password ) && mb_strlen($password) >= 12) {
  echo 'Пароль сложный';
  } else {
  echo 'Пароль простой';
  }
}

checkedPass($password);