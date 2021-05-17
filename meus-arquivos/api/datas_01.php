<div class="title">Data #01</div>

<?php

echo time() . '<br>';
echo date('D, d \d\e M \d\e Y') . '<br>';

echo strftime('%A, %d de %B de %Y', time()) . '<br>';
setlocale(LC_ALL, 'ptb');
echo strftime('%A, %d de %B de %Y', time()) . '<br>';

$tomorrow = time() + (60 * 60 * 24);
echo utf8_encode(ucwords(strftime('%A, %d', $tomorrow)) . ' de ' . ucwords(strftime('%B', $tomorrow)) . ' de ' . ucwords(strftime('%Y', $tomorrow))) . '<br>';

$proximaSemana = strtotime('+1 week');
echo utf8_encode(ucwords(strftime('%a, %d', $proximaSemana)) . ' de ' . ucwords(strftime('%B', $proximaSemana)) . ' de ' . ucwords(strftime('%Y', $proximaSemana))) . '<br>';

$dataFixa = mktime(15, 30, 50, 1, 25, 1975);
echo utf8_encode(ucwords(strftime('%a, %d', $dataFixa)) . ' de ' . ucwords(strftime('%B', $dataFixa)) . ' de ' . ucwords(strftime('%Y', $dataFixa)) . ' - ' . strftime('%H:%M:%S', $dataFixa)) . '<br>';
