<div class="title">Classe Data</div>

<?php

class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar() {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$aniversario = new Data;
$aniversario->dia = 16;
$aniversario->mes = 02;
$aniversario->ano = 1998;

$casamento = new Data;
$casamento->dia = 15;
$casamento->mes = 11;
$casamento->ano = 2015;

echo $aniversario->apresentar(), '<br><br>';
echo $casamento->apresentar();

?>
