<?php 
/*
Выведите на экран все счастливые билеты. Счастливый билет - это когда сумма первых трех цифр в номере билета равна сумме второй тройки цифр (номер шестизначный). Подсчитайте сколько счастливых билетов существует и какой % они составляют от общего числа билетов.
*/

$tickets = [209018,538182,491000,351684,664807,882756,286608,951373,247706,197075 ,967881,303733,229791,125052,796076];
$countHappyTickets = 0;

foreach ($tickets as $ticket) {
    $ticketLeft = array_sum(str_split(mb_substr(strval($ticket), 0, 3)));
    $ticketRight = array_sum(str_split(mb_substr(strval($ticket), 3, 6)));
    if($ticketLeft == $ticketRight) {
        echo "Счастливый билет: ".$ticket."<br>";
        $countHappyTickets++;
    }
}

echo "Всего счастливых билетов: ".$countHappyTickets."<br>";
echo "% счастливых билетов: " . round($countHappyTickets / count($tickets)*100) . "<br>";

