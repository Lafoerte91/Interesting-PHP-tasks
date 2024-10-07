<?php 
/*
Дан массив, содержащий набор карточных карт. Проверьте, что все карты одной масти.
*/
$deck =[['suit' => '♦️', 'rank' => 2], ['suit' => '♦️', 'rank' => 3], ['suit' => '♦️', 'rank' => 4], ['suit' => '♦️', 'rank' => 5]];
$deck2 =[['suit' => '♥️', 'rank' => 'K'], ['suit' => '♣️', 'rank' => 'Q'], ['suit' => '♠️', 'rank' => 'A'], ['suit' => '♦️', 'rank' => 'J']];

function checkRankCards($cards) {
  $suit = $cards[0]['suit'];
  foreach ($cards as $card) {
    if($card['suit'] != $suit )  {
      return false;
    }
  }

  return true;
}

echo checkRankCards($deck)."\n";
echo checkRankCards($deck2)."\n";