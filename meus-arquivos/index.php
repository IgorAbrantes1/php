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
            <nav class="modules">
                <div class="module roxo">
                    <h3>4 - Controle</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=controle&file=if_else">If Else</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=operadores_relacionais">Operadores Relacionais</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=desafio_pi">Desafio PI</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=operadores_logicos">Operadores Lógicos</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=desafio_operadores_logicos">Desafio Op. Lógicos</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=operador_ternario">Operador Ternário</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=switch">Switch</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=desafio_switch">Desafio Switch</a>
                        </li>
                    </ul>
                </div>
                <div class="module azul">
                    <h3>3 - Variáveis</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=basico">Variáveis</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafio_equacao">Desafio Equação</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=atribuicoes">Atribuições</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">Variáveis Variáveis</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafio_variaveis">Desafio Variáveis</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=valor_referencia">Valor vs Referência</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=constantes">Constantes</a>
                        </li>
                    </ul>
                </div>
                <div class="module vermelho">
                    <h3>2 - Tipos</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=float">Tipo Float</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=aritmeticas">Operações Aritméticas</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio_precedencia">Desafio Precedência</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=string">Tipo String</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio_string">Desafio String</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=booleano">Tipo Booleano</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=conversoes">Conversões</a>
                        </li>
                    </ul>
                </div>
                <div class="module verde">
                    <h3>1 - Básico</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=ola">Olá PHP</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=html">Integração HTML</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=css">Integração CSS</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=comentarios">Comentários PHP</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=desafio">Desafio</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <fo oter class="footer">COD3R & IGOR ABRANTES © <?= date('Y'); ?></footer>
</body>

</html>
