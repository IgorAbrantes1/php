<div class="title">Formulário</div>

<h2>Cadastro</h2>

<?php

if (count($_POST) > 0) {
    $erros = [];

    if (!filter_input(INPUT_POST, "nome")) {
        $erros['nome'] = "Nome é obrigatório";
    }

    if (filter_input(INPUT_POST, "nascimento")) {
        $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
        if (!$data) {
            $erros['nascimento'] = "Data deve estar no padrão: dd/mm/aaaa";
        }
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email'] = "E-mail inválido!";
    }

    if (!filter_var($_POST['site'], FILTER_VALIDATE_URL)) {
        $erros['site'] = "Site inválido";
    }

    $filhosConfig = ['options' => ['min_range' => 0, 'max_range' => 20]];

    if (!filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $_POST['filhos'] != 0) {
        $erros['filhos'] = "Quantidade de filhos inválida! (0-20)";
    }

    $salarioConfig = ['options' => ['decimal' => ',']];

    if (!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
        $erros['salario'] = "Salário inválido.";
    }
}

?>

<?php foreach ($erros as $erro): ?>
    <!--    <div class="alert alert-danger" role="alert">-->
    <?php "" ?>
    <!--    </div>-->
<?php endforeach; ?>

<form action="#" method="post">
    <div class="row">
        <div class="form-group col-md-7">
            <label for="nome">Nome</label>
            <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid' : 'is-valid' ?>" id="nome"
                   name="nome" placeholder="Nome"
                   value="<?= $_POST['nome'] ?>">
            <div class="invalid-feedback">
                <?= $erros['nome'] ?>
            </div>
        </div>
        <div class="form-group col-md-5">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : 'is-valid' ?>"
                   id="nascimento"
                   name="nascimento" placeholder="Nascimento"
                   value="<?= $_POST['nascimento'] ?>">
            <div class="invalid-feedback">
                <?= $erros['nascimento'] ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control <?= $erros['email'] ? 'is-invalid' : 'is-valid' ?>" id="email"
                   name="email" placeholder="E-mail"
                   value="<?= $_POST['email'] ?>">
            <div class="invalid-feedback">
                <?= $erros['email'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid' : 'is-valid' ?>" id="site"
                   name="site"
                   placeholder="Site"
                   value="<?= $_POST['site'] ?>">
            <div class="invalid-feedback">
                <?= $erros['site'] ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtde de Filhos</label>
            <input type="number" class="form-control <?= $erros['filhos'] ? 'is-invalid' : 'is-valid' ?>" id="filhos"
                   name="filhos" placeholder="Qtde de Filhos"
                   value="<?= $_POST['filhos'] ?>">
            <div class="invalid-feedback">
                <?= $erros['filhos'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control <?= $erros['salario'] ? 'is-invalid' : 'is-valid' ?>" id="salario"
                   name="salario" placeholder="Salário"
                   value="<?= $_POST['salario'] ?>">
            <div class="invalid-feedback">
                <?= $erros['salario'] ?>
            </div>
        </div>
    </div>
    <button class="btn btn-outline-success btn-lg">Enviar</button>
</form>
