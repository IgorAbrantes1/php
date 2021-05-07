<main class="content">
    <?php

    renderTitle(
        'Cadastro de usuários',
        'Mantenha os dados dos usuários atualizados',
        'icofont-users'
    );

    include(TEMPLATE_PATH . "/messages.php");

    ?>

    <a href="save_user.php" class="mb-3 btn btn-lg btn-primary">Novo Usuário</a>

    <table class="table table-bordered table-striped table-hover">
        <thead>

        <th>Nome</th>
        <th>E-mail</th>
        <th>Data de Admissão</th>
        <th>Data de desligamento</th>
        <th>Ações</th>

        </thead>

        <tbody>

        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user->name ?></td>
                <td><?= $user->email ?></td>
                <td><?= $user->start_date ?></td>
                <td><?= $user->end_date ?></td>
                <td>
                    <a href="save_user.php?update=<?= $user->id ?>" class="mr-2 btn btn-warning rounded-circle">
                        <i class="icofont-edit"></i>
                    </a>
                    <a href="?delete=<?= $user->id ?>" class="btn btn-danger rounded-circle">
                        <i class="icofont-trash"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach ?>

        </tbody>
    </table>
</main>
