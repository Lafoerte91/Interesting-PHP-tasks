<?php 
/*
Дан массив, содержащий набор карточных карт. Дана масть, которая является козырем. Дана карта, которой к вам походил противник. Получите минимальную карту из этого массива, с помощью которой можно отбить карту противника.
*/
$deck =[['suit' => '♦️', 'rank' => 2], ['suit' => '♦️', 'rank' => 3], ['suit' => '♦️', 'rank' => 4], ['suit' => '♦️', 'rank' => 5], ['suit' => '♥️', 'rank' => 'K'], ['suit' => '♣️', 'rank' => 'Q'], ['suit' => '♠️', 'rank' => 'A'], ['suit' => '♦️', 'rank' => 'J']];

function minCardStep($cards, $trumpSuit, $opponentCardSuit, $opponentCardRank) {
  $minCard = null;
  $ranks = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A']; // Порядок рангов карт

  foreach($cards as $card) {
    // Если карта той же масти, что и козырь, а у противника - не козырь, то она подходит
    if($card['suit'] == $trumpSuit && $opponentCardSuit != $trumpSuit) {
      if(is_null($minCard) || $ranks[array_search($card['rank'], $ranks)] < $ranks[array_search($minCard['rank'], $ranks)]) {
        $minCard = $card;
      }
  }
  // Если карта той же масти, что и карта противника, и больше, чем карта противника, то она подходит
  if($card['suit'] == $opponentCardSuit && $ranks[array_search($card['rank'], $ranks)] > $ranks[array_search($opponentCardRank, $ranks)]) {
    if(is_null($minCard) || $ranks[array_search($card['rank'], $ranks)] < $ranks[array_search($minCard['rank'], $ranks)]) {
      $minCard = $card;
    }
}
}
return $minCard ? $minCard['rank'] . " " . $minCard['suit'] : null; // Если подходящей карты нет, возвращаем null
}

$trumpSuit = '♦️';
$opponentCardSuit = '♠️';
$opponentCardRank = 'Q';
$minCard = minCardStep($deck, $trumpSuit, $opponentCardSuit, $opponentCardRank);

echo "Минимальная карта для отбивки: " . ($minCard ? $minCard: 'нет подходящей карты'). "\n";