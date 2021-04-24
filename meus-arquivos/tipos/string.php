<div class="title">Tipo String</div>

<?php
echo 'Eu sou uma string', '<br>';
var_dump("Eu também");
echo '<br>';

// Concatenação
echo ("Nós também" . ' somos' . '<br>');
echo ('Número é ' . 1234);
echo '<br>', "Também aceito", " virgulas";

echo '<br>';
echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" " . "\\";

print("<br>Também existe o função print");
print "<br>Também existe o função print";

// Algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . mb_strlen("Eu também", "utf-8");
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // parte
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso por aquilo');
?>
