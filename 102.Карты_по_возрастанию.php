<?php 
/*
Дан массив, содержащий набор карточных карт. Проверьте, что в этом наборе карты идут подряд по возрастанию.
*/
$deck =[['suit' => '♦️', 'rank' => 2], ['suit' => '♦️', 'rank' => 3], ['suit' => '♦️', 'rank' => 4], ['suit' => '♦️', 'rank' => 5], ['suit' => '♥️', 'rank' => 'K'], ['suit' => '♣️', 'rank' => 'Q'], ['suit' => '♠️', 'rank' => 'A'], ['suit' => '♦️', 'rank' => 'J']];

function checkSortCards($cards) {
  $ranks = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A']; 

  for($i  = 0; $i < count($cards); $i++) {
    if(array_search($cards[$i]['rank'], $ranks) > array_search($cards[$i + 1]['rank'], $ranks)) {
      return "No";
    }
  }

  return "Yes";
}

echo checkSortCards($deck);