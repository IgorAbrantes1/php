<div class="title">Desafio</div>

<?php

require_once 'usuario.php';
$usuario = new Usuario('Igor Abrantes', 23, 'igorabrantes1');
echo $usuario->apresentar();
unset($usuario);
