<?php
/*
Придумайте, как хранить набор игральных карт в виде массива.
*/
function SetPlayingCards() {
  $deck = [];
  // Масти
  $suits = ['♥️', '♦️', '♣️', '♠️'];
  // Значения карт
  $ranks = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];
  // Создание колоды
  foreach ($suits as $suit) {
    foreach ($ranks as $rank) {
      $deck[] = ['suit' => $suit, 'rank' => $rank];
    }
  }

  return $deck;
}

print_r(SetPlayingCards());
