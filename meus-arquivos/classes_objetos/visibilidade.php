<div class="title">Visibilidade</div>

<?php

class A
{
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA(): void
    {
        echo "Classe A) Público = {$this->publico}<br>";
        echo "Classe A) Protegido = {$this->protegido}<br>";
        echo "Classe A) Privado = {$this->privado}<br>";
        // $this->naoMostrar();
    }

    private function naoMostrar(): void
    {
        echo 'Não vou imprimir!<br>';
    }
}

$a = new A;
$a->mostrarA();

class B extends A
{
    public function mostrarB(): void
    {
        echo "Classe B) Público = {$this->publico}<br>";
        echo "Classe B) Protegido = {$this->protegido}<br>";
        echo "Classe B) Privado = {$this->privado}<br>";
    }
}
echo '<br>';
$b = new B;
$b->mostrarB();

?>
