<div class="title">Herança</div>

<?php

class Pessoa
{
    public $nome;
    public $idade;

    function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar(): void
    {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

class Usuario extends Pessoa
{
    public $login;

    function __construct($nome, $idade, $login)
    {
        // $this->nome = $nome;
        // $this->idade = $idade;
        parent::__construct($nome, $idade);
        $this->login = $login;
    }

    public function apresentar(): void
    {
        echo "@{$this->login}: ";
        parent::apresentar();
    }
}

$usuario = new Usuario('Igor Abrantes', 23, 'igorabrantes1');
$usuario->apresentar();
unset($usuario);

?>
