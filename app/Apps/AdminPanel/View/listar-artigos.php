<?php

require_once __ROOT_FOLDER__ . "/vendor/autoload.php";

use app\Core\Infra\DatabaseConnection;
use app\Entity\Artigos\Artigo;

$artigo = new Artigo(mysql: DatabaseConnection::create());
$artigos = $artigo->exibirTodos();

?>

<?php
include __PUBLIC_FOLDER__ . '/view/html/inicioHTML.php';
?>

<body class="bg-primary">
    <div id="container" class="bg-light mx-5 my-4 p-3">
    <div class="m-5">
        <h1 class="fs-1 pb-3">Página Administrativa</h1>

        <table class="table">
            <thead>
            <tr class="fs-5">
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Status</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
            </tr>
            </thead>

            <tbody>
            <?php foreach ($artigos as $art): ?>
            <tr>
                <th scope="row"><?php echo $art['id']; ?></th>
                <td><?php echo $art['titulo']; ?></td>
                <td>

                        <?php if ($art['status'] == 1){ ?>
                            <a class="btn btn-success" style="width: 70px;">Ativo</a>
                        <?php }  else { ?>
                            <a class="btn btn-danger" style="width: 70px;">Inativo</a>
                        <?php } ?>

                </td>
                <td><a class="btn btn-info" href="<?=__SYSTEM_ADMIN_URL__?>/editar-artigo?id=<?php echo $art['id']; ?>">Editar</a></td>
                <td><a class="btn btn-danger" href="<?=__SYSTEM_ADMIN_URL__?>/excluir-artigo?id=<?php echo $art['id']; ?>">Excluir</a></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <a class="btn btn-primary" href="<?=__SYSTEM_ADMIN_URL__?>/novo-artigo">Adicionar Artigo</a>

    </div>
    </div>

<?php
include __PUBLIC_FOLDER__ . '/view/html/finalHTML.php';