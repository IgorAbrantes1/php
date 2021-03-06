<?php

require_once 'verificacao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php require_once 'template/head.php'; ?>
    <link rel="stylesheet" href="assets/css/exercicio.css" />
    <title>Exercício</title>
</head>

<body class="exercicio">
    <header class="header">
        <h1>Curso PHP</h1>
        <h2>Visualização do exercício</h2>
    </header>
    <nav class="navegation">
        <span class="user">
            Usuário: <?= $_SESSION['user'] ?>
        </span>
        <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
        <a href="index.php">Voltar</a>
        <a href="logout.php" class="vermelho">Sair</a>
    </nav>
    <main class="main">
        <div class="container">
            <?php
            include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php")
            ?>
        </div>
    </main>
    <?php
    require_once 'template/footer.php';
    ?>
</body>

</html>
