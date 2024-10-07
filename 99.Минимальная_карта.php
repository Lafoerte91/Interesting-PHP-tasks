<?php 
/*
Дан массив, содержащий набор карточных карт. Получите минимальную карту из этого массива.
*/
$deck =[['suit' => '♦️', 'rank' => 2], ['suit' => '♦️', 'rank' => 3], ['suit' => '♦️', 'rank' => 4], ['suit' => '♦️', 'rank' => 5]];
$deck2 =[['suit' => '♥️', 'rank' => 'K'], ['suit' => '♣️', 'rank' => 'Q'], ['suit' => '♠️', 'rank' => 'A'], ['suit' => '♦️', 'rank' => 'J']];

function minCardInDeck($cards){
  $num = false;
  foreach ($cards as $card) {
    if(is_numeric($card['rank'])) {
      $num = true;
  }
}

  if($num) {
    $minCard = $cards[0]['rank'];
    foreach ($cards as $card) {
      if($card['rank'] < $minCard) {
        $minCard = $card['rank'];
      }
    }
  } else {
    foreach ($cards as $card) {
      if($card['rank'] == 'J') {
        $minCard = 'J';
      } elseif($card['rank'] == 'Q') {
        $minCard = 'Q';
      } elseif($card['rank'] == 'K') {
        $minCard = 'K';
      } elseif($card['rank'] == 'A') {
        $minCard = 'A';
      }
    }
  }
  return $minCard;
}

echo minCardInDeck($deck) . "<br>";
echo minCardInDeck($deck2);