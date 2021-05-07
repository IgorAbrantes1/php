<div class="title">Gerenciando Sessão</div>

<?php

session_start();
echo session_id();

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo '<br>' . $_SESSION['contador'];

if ($_SESSION['contador'] % 2 === 0) {
    session_regenerate_id();
}

if ($_SESSION['contador'] >= 10) {
    session_destroy();
}
