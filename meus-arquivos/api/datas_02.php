<div class="title">Data #02</div>

<?php

$formatDate1 = 'D, d \d\e M \d\e Y';
$formatDate2 = '%A, %d de %B de %Y';
$formatDate3 = '%A, %d de %B de %Y - %H:%M:%S';

$now = new DateTime();
// print_r($now);
// echo '<br>';

echo $now->format($formatDate1) . '<br>';
setlocale(LC_ALL, 'ptb.utf-8');
echo strftime($formatDate2, $now->getTimestamp()) . '<br>';

$dataFixa = new DateTime('1975-01-25 15:30:50');
echo strftime($formatDate3, $dataFixa->getTimestamp()) . '<br>';

$tomorrow = new DateTime('+2 day');
echo strftime($formatDate2, $tomorrow->getTimestamp()) . '<br>';


$tomorrow->modify('+1 day');
echo strftime($formatDate2, $tomorrow->getTimestamp()) . '<br>';

$tomorrow->setDate(2000, 5, 20);
echo strftime($formatDate2, $tomorrow->getTimestamp()) . '<br>';

// Comparando datas
$dataPassada = new DateTime('2000-05-17');
$dataFutura = new DateTime('2030-11-26');
$outraData = new DateTime('2030-11-26');
echo ($tomorrow > $dataPassada ? 'Maior' : 'Menor') . '<br>';
echo ($tomorrow > $dataFutura ? 'Maior' : 'Menor') . '<br>';
echo ($outraData == $dataFutura ? 'Igual' : 'Diferente') . '<br>';

$tz = new DateTimeZone('America/Sao_Paulo');
$now = new DateTime(null, $tz);
echo strftime('%d/%m/%Y %H:%M:%S', $now->getTimestamp()) . '<br>';
