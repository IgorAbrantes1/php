<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />

    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- Título -->
    <title>Curso PHP</title>
</head>

<body>
    <header class="header">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="main">
        <div class="container">
            <?php require_once 'menu.php';?>
        </div>
    </main>
    <footer class="footer">COD3R & IGOR ABRANTES © <?=date('Y');?></footer>
</body>


</html>
