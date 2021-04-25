<div class="title">Primeira Classe</div>

<?php

class Cliente
{
    public $nome = 'Anônimo';
    public $idade = 18;

    public function apresentar()
    {
        return 'Nome ' . $this->nome . '<br>' . 'Idade: ' . $this->idade;
    }
}

$c1 = new Cliente();
echo $c1->nome, '<br>';

$c1->nome = 'Igor';
$c1->idade = 27.5;
echo $c1->nome, '<br>';

$c2 = new Cliente;
$c2->nome = 'Gabriel';
$c2->idade = 43;

echo '<br>' . $c1->apresentar() . '<br>';
echo '<br>' . $c2->apresentar(), '<br>';

?>
