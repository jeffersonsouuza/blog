<?php

require_once __ROOT_FOLDER__ . "/vendor/autoload.php";
include __ADMIN_FOLDER__ . '/View/layoutInicio.php';

use app\Core\Infra\DatabaseConnection;
use app\Entity\Artigos\Artigo;

$numeroPagina = 1;

if (isset($_GET['pagina'])) {
    $numeroPagina = filter_input(INPUT_GET, 'pagina', FILTER_VALIDATE_INT);
}

if (!$numeroPagina) {
    $numeroPagina = 1;
}

$limiteArtigos = 8;

$inicio = ($numeroPagina * $limiteArtigos) - $limiteArtigos;

$artigo = new Artigo(mysql: DatabaseConnection::create());
$artigos = $artigo->exibirTodosComPaginacao($inicio, $limiteArtigos);

$quantidadeArtigos = count($artigo->exibirTodos());
$quantidadePaginas = ceil($quantidadeArtigos / $limiteArtigos);

if ($quantidadeArtigos === 0) {
    $quantidadePaginas = 1;
}

?>

<section class="lista-artigos overflow-auto">
    <div class="container-fluid pb-3 pt-2">
        <div class="row mb-3">
            <div class="d-flex justify-content-between align-items-center p-0">
                <h1 class="fw-bold main-title"><?=$title?></h1>
                <div>
                    <span data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Novo Artigo">
                        <a type="button" href="<?=__SYSTEM_ADMIN_URL__?>/novo-artigo" class="btn btn-outline-secondary btn-sm">
                            <i class="bi-plus-lg"></i>
                        </a>
                    </span>
                </div>
            </div>
        </div>

        <hr class="mb-3">

        <div class="mb-3">
            <table class="table table-responsive-md table-hover table-sm caption-top">
                <caption>Lista de Artigos</caption>
                <thead>
                    <tr class="">
                        <th scope="col">#</th>
                        <th scope="col">View</th>
                        <th scope="col">Titulo do Artigo</th>
                        <th scope="col">Data do Post</th>
                        <th scope="col">Status</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (!empty($artigos)): ?>
                        <?php foreach ($artigos as $art): ?>
                            <tr>
                                <?php if (!empty($art)): ?>
                                    <th class="py-2" scope="row"><?php echo $art['id']; ?></th>
                                    <td class="py-2"><a class="btn btn-outline-primary btn-sm" href=""><i class="bi-box-arrow-up-right"></i></a></td>
                                    <td class="py-2"><?php echo $art['titulo']; ?></td>
                                    <td class="py-2">19 May, 2024</td>
                                    <td class="py-2">
                                        <?php if ($art['status'] == 1): ?>
                                            <a class="btn btn-success pe-none btn-sm" style="width: 4.5rem;">Ativo</a>
                                        <?php else: ?>
                                            <a class="btn btn-danger pe-none btn-sm" style="width: 4.5rem;">Inativo</a>
                                        <?php endif; ?>
                                    </td>
                                    <td class="py-2"><a class="btn btn-outline-primary btn-sm" href="<?=__SYSTEM_ADMIN_URL__?>/editar-artigo?id=<?php echo $art['id']; ?>"><i class="bi-pencil-square"></i></a></td>
                                    <td class="py-2"><a class="btn btn-outline-danger btn-sm" href="<?=__SYSTEM_ADMIN_URL__?>/excluir-artigo?id=<?php echo $art['id']; ?>"><i class="bi-x-square"></i></a></td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <th class="text-center py-3" colspan="7">Nenhum registro foi encontrado.</th>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<nav class="pagina-navegacao" aria-label="Page navigation">
    <ul class="pagination pagination-sm mb-3">
        <li class="page-item <?= $numeroPagina > 1 ? 'block' : 'disabled'?>"><a class="page-link" href="?pagina=<?=$numeroPagina - 1?>">Anterior</a></li>

        <?php for ($i = 1; $i <= $quantidadePaginas; $i++): ?>
            <li class="page-item"><a class="page-link" href="?pagina=<?= $i ?>"><?= $i ?></a></li>
        <?php endfor; ?>

        <li class="page-item <?= $numeroPagina >= $quantidadePaginas ? 'disabled' : 'block'?>"><a class="page-link" href="?pagina=<?=$numeroPagina + 1?>">Próxima</a></li>
        <li class="page-item <?= $numeroPagina == $quantidadePaginas ? 'disabled' : 'block'?>"><a class="page-link" href="?pagina=<?=$quantidadePaginas?>">Última</a></li>
    </ul>
</nav>

<?php
include __ADMIN_FOLDER__ . '/View/layoutFinal.php';
?>
