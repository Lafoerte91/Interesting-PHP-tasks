<?php
/*
Дан блок, содержащий HTML ссылки. Сделайте функцию, которая параметром будет принимать href ссылки и возвращать href соседа сверху для заданной ссылки
*/

function getHrefOfPreviousSibling($html, $targetHref) {
  // Загружаем HTML в DOMDocument
  $dom = new DOMDocument();
  $dom->loadHTML($html);
  // Получаем все ссылки
  $links = $dom->getElementsByTagName('a');
  // Проходим по всем ссылкам
  foreach ($links as $link) {
    // Проверяем, совпадает ли href текущей ссылки с искомым
    if($link->getAttribute('href') == $targetHref) {
      // Если совпадает, получаем предыдущий элемент
      $previousSibling = $link->previousSibling;
      // Проверяем, является ли предыдущий элемент ссылкой
      if($previousSibling != null && $previousSibling->nodeName == 'a') {
        // Если это ссылка, возвращаем ее href
        return $previousSibling->getAttribute('href');
      } else {
        // Если это не ссылка или ее нет, возвращаем null
        return null;
      }
    }
  }
  // Если ссылка с заданным href не найдена, возвращаем null
  return null;
}

$html = <<<HTML
<a href="/link1">Ссылка 1</a>
<a href="/link2">Ссылка 2</a>
<a href="/link3">Ссылка 3</a>
HTML;

$targetHref = '/link3';
$previousHref = getHrefOfPreviousSibling($html, $targetHref);

if($previousHref != null) {
  echo "Href соседа сверху: " . $previousHref; // Выведет: Href соседа сверху: /link2
} else {
  echo "Сосед сверху не найден или не является ссылкой";
}