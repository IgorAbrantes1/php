<div class="title">Membros Estáticos</div>

<?php

class A
{
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável estática';

    public function mostrarA(): void
    {
        echo "Não estática = {$this->naoStatic}<br>";
        echo "Estática = {$this->static}<br>";
        echo "Estática = {self::static}<br>";
        echo "Estática = " . self::$static . "<br>";
    }

    public static function mostrarStaticA(): void
    {
        echo "Estática = " . self::$static . "<br>";
    }
}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarStaticA();

A::mostrarStaticA();

?>
