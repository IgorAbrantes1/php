<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="assets/css/comum.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
                  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/template.css">
    <link rel="shortcut icon" type="imagem/x-icon" href="assets/img/icon.ico">
    <title>In N' Out</title>
</head>

<body>
<header class="header">
    <div class="logo">
        <i class="icofont-travelling mr-2"></i>
        <span class="font-weight-light">In </span>
        <span class="font-weight-bold mx-2"> N' </span>
        <span class="font-weight-light"> Out </span>
        <i class="icofont-runner-alt-1 ml-2"></i>
    </div>
    <div class="menu-toggle mx-3">
        <i class="icofont-navigation-menu"></i>
    </div>
    <div class="spacer"></div>
    <div class="dropdown">
        <div class="dropdown-button">
            <img class="avatar"
                 src="<?="http://www.gravatar.com/avatar.php?gravatar_id=" . md5(strtolower(trim($_SESSION['user']->email)))?>"
                 alt="user">
            <span class="mx-1">
                    <?=$_SESSION['user']->name?>
                </span>
            <i class="icofont-simple-down ml-3"></i>
        </div>
        <div class="dropdown-content">
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="logout.php">
                        <i class="icofont-logout mr-2"></i>
                        Sair
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
