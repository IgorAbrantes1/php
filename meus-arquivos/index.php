<?php

session_start();
if (!$_SESSION['user']) {
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    require_once 'template/head.php';
    ?>

    <title>Curso PHP</title>
</head>

<body>
    <header class="header">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <nav class="navegation">

    </nav>
    <main class="main">
        <div class="container">
            <?php require_once 'template/menu.php'; ?>
        </div>
    </main>
</body>

<?php require_once 'template/footer.php'; ?>

</html>
