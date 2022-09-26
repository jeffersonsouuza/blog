<?php
//
//require_once __DIR__ . "/../../vendor/autoload.php";
//
//use Source\Entity\Artigo;
//use Source\Infra\DatabaseConnection;
//
//$artigo = new Artigo(mysql: DatabaseConnection::create());
//$artigos = $artigo->exibirTodos();
//
//?>

<?php
include __DIR__ . '/../html/inicioHTML.php';
?>

<body class="bg-primary">
    <div id="container" class="bg-light m-5 p-3">
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
                    <a class="btn btn-success">
                        <?php if ($art['status'] == 1) {
                            echo "Ativo";
                        } else {
                            echo "Inativo";
                        }?>
                    </a>
                </td>
                <td><a class="btn btn-info text-white" href="/blog-php/index.php/editar-artigo?id=<?php echo $art['id']; ?>">Editar</a></td>
                <td><a class="btn btn-danger" href="/blog-php/index.php/excluir-artigo?id=<?php echo $art['id']; ?>">Excluir</a></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <a class="btn btn-primary" href="/blog-php/index.php/novo-artigo">Adicionar Artigo</a>

    </div>
    </div>

<?php
include __DIR__ . '/../html/finalHTML.php';
