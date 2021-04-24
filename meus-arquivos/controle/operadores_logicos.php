<div class="title">Operadores Lógicos</div>

<?php
echo "<p class='div'>Negação Lógica</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); // not

echo "<p class='div'>Tabela Verdade 'AND' (E)</p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);

var_dump(true and true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);

echo "<p class='div'>Tabela Verdade 'OR' (OU)</p><hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);

echo "<p class='div'>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

echo "<p class='div'>Exemplo</p><hr>";
$idade = 150;
$sexo = 'F';

$pagouPrevidencia = true;
$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "Pode se aposentar -> $podeSeAposentar.<br>";

if ($criterioMulher) {
    echo "Pode se aposentar -> $sexo";
} elseif ($criterioHomem) {
    echo "Pode se aposentar -> $sexo";
} else {
    echo 'Vai ter que trabalhar mais um pouco...';
}

?>

<style>
    p {
        margin-bottom: 0px;
    }

    hr {
        margin-top: 0px;
    }
</style>
