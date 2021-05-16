<?php

session_start();
$email = $_POST['email'];
$password = $_POST['password'];

if ($_POST['email']) {
    $users = [
        [
            "name" => "Aluno Cod3r",
            "email" => "aluno@cod3r.com",
            "password" => "123456",
        ],
        [
            "name" => "Outro Aluno",
            "email" => "outro@cod3r.com",
            "password" => "654321",
        ],
    ];

    foreach ($users as $user) {
        $emailValidate = $email === $user['email'];
        $passwordValidate = $password === $user['password'];

        if ($emailValidate && $passwordValidate) {
            $_SESSION['errors'] = null;
            $_SESSION['user'] = $user['name'];

            $exp = time() + 60 * 60 * 24 * 7;
            setcookie('user', $user['name'], $exp);

            header("Location: index.php");
        }
    }

    if (!$_SESSION['user']) {
        $_SESSION['errors'] = ['Usuário/Senha inválido!'];
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    require_once 'template/head.php';
    ?>
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Curso PHP</title>
</head>

<body class="login">
    <header class="header">
        <h1>Curso PHP</h1>
        <h2>Seja Bem Vindo!</h2>
    </header>
    <main class="main">
        <div class="container">
            <h3>Identifique-se</h3>
            <?php if ($_SESSION['errors']) : ?>
                <div class="errors">
                    <?php foreach ($_SESSION['errors'] as $error) : ?>
                        <p><?= $error ?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <form action="" method="post">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password">
                </div>
                <button>Entrar</button>
            </form>
        </div>
    </main>
</body>

<?php require_once 'template/footer.php'; ?>

</html>
