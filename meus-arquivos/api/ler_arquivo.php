<div class="title">Ler Arquivo</div>

<?php

$arquivo = fopen('api/teste.txt', 'r');
echo fread($arquivo, 10) . '<br>';
echo fread($arquivo, 10) . '<br>';
fclose($arquivo);

$arquivo = fopen('api/teste.txt', 'r');
$tamanho = filesize('api/teste.txt');
echo $tamanho . '<br>';
echo fread($arquivo, $tamanho);
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('api/teste.txt', 'r');
echo fgets($arquivo) . '<br>';
echo fgets($arquivo) . '<br>';
var_dump(fgets($arquivo));
echo '<br>';
echo fgets($arquivo);
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('api/teste.txt', 'r');
while(!feof($arquivo)) {
    echo fgetc($arquivo);
}
echo '<br>';
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('api/teste.txt', 'r+');
echo fgets($arquivo) . '<br>';
echo fgets($arquivo) . '<br>';
echo fgets($arquivo);
fwrite($arquivo, "Durante a leitura");
fclose($arquivo);

echo "FIM!";
