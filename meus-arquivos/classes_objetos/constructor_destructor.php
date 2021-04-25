<div class="title">Contrutor e Destrutor</div>

<?php

class Pessoa
{
    public $nome;
    public $idade;

    function __construct($nome, $idade = 18)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct()
    {
    }

    public function apresentar(): string
    {
        return "Nome: {$this->nome} <br> Idade: {$this->idade} anos<br>";
    }
}

$pessoa1 = new Pessoa('Igor', 23); // Construtor
echo $pessoa1->apresentar();
unset($pessoa1); // Destrutor

$pessoaB = new Pessoa('João Pedro'); // Construtor

echo $pessoaB->apresentar();
$pessoaB = null; // Destrutor

?>
