<div class="title">Escrever Arquivo</div>

<?php

$arquivo = fopen('api/teste.txt', 'w');
fwrite($arquivo, "Valor inicial\n");
$str = "Segunda linha\n";
fwrite($arquivo, $str);

fclose($arquivo);

$arquivo = fopen('api/teste.txt', 'w');
fwrite($arquivo, "Novo conteúdo");
fclose($arquivo);

$arquivo = fopen('api/teste.txt', 'a');
fwrite($arquivo, " com novos valores.\n");
fwrite($arquivo, "Adicionados em um segundo momento.\n");
fclose($arquivo);

ini_set('display_errors', 1);

$arquivo = fopen('api/teste.txt', 'x');
