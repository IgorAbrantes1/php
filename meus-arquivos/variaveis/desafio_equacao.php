<div class="title">Desafio Equação</div>

<?php

$numA = (6 * (3 + 2)) ** 2;
$denA = (3 * 2);

$numB = (1 - 5) * (2 - 7);
$denB = 2;

$eq1 = $numA / $denA;
$eq2 = ($numB / $denB) ** 2;

$result = (($eq1 - $eq2) ** 3) / (10 ** 3);

echo "O resultado final é \"{$result}\".";
?>
