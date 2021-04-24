<div class="title">Variáveis</div>

<?php
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma;

echo '<br><br>';
echo isset($soma);
unset($soma);
echo '<br>';
var_dump($soma);

$variavel = 10;
echo '<br><br>' . $variavel;
$variavel = "Agora sou uma string.";
echo '<br>' . $variavel;

// Nomes de variáveis
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida'; // evitar começar com '_'
$vâr5 = 'valida'; // evitar acentos!
// $6var = 'inválida';
// $%var7 = 'inválida';
// $var8% = 'inválida';

echo '<br><br>';
echo $_SERVER;
echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);

?>
