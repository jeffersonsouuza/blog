<?php

require_once __ROOT_FOLDER__ . "/vendor/autoload.php";
include __ADMIN_FOLDER__ . '/View/startLayout.php';

use app\Core\DatabaseConnection;
use app\Entity\Artigos\Article;

$numeroPagina = 1;

if (isset($_GET['pagina'])) {
    $numeroPagina = filter_input(INPUT_GET, 'pagina', FILTER_VALIDATE_INT);
}

if (!$numeroPagina) {
    $numeroPagina = 1;
}

$limiteArtigos = 10;

$inicio = ($numeroPagina * $limiteArtigos) - $limiteArtigos;

$artigo = new Article(mysql: DatabaseConnection::create());
$artigos = $artigo->exibirTodosComPaginacao($inicio, $limiteArtigos);

$quantidadeArtigos = count($artigo->exibirTodos());
$quantidadePaginas = ceil($quantidadeArtigos / $limiteArtigos);

if ($quantidadeArtigos === 0) {
    $quantidadePaginas = 1;
}

?>

<section class="overflow-auto bg-white p-4">
    <div class="container-fluid px-0">
        <section class="w-100 mb-4 mb-md-0" style="min-height: 8vh">
            <div class="row">
                <div class="col-md-6 px-0">
                    <h1 class="fw-bold main-title"><?=$title?></h1>
                </div>
                <div class="col-md-6 pt-3 pt-md-0 px-0 d-md-flex justify-content-md-end align-items-md-center">
                    <span data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Voltar">
                        <a type="button" href="javascript:history.back()" class="btn btn-outline-secondary">
                            <i class="bi-arrow-return-left"></i>
                        </a>
                    </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Novo Artigo">
                        <a type="button" href="<?=__SYSTEM_ADMIN_URL__?>/novo-artigo" class="btn btn-outline-secondary ms-2">
                            <i class="bi-plus-lg"></i>
                        </a>
                    </span>
                </div>
            </div>
        </section>

        <section class="mb-4">
            <nav class="" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a class="text-decoration-none text-secondary fw-bold fs-4" href="<?=__SYSTEM_ADMIN_URL__?>/dashboard">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span class="badge bg-secondary-extra-light text-secondary fw-bold fs-4">Artigos</span>
                    </li>
                </ol>
            </nav>
        </section>

        <div class="bg-white table-responsive mb-3" style="min-height: 70vh">
            <table class="table table-hover table-sm caption-top mb-5">
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
                                    <td class="py-2">
                                        <a class="btn btn-outline-primary btn-sm" href="<?=__SYSTEM_ADMIN_URL__?>/mostrar-artigo?id=<?php echo $art['id'];?>">
                                            <i class="bi-box-arrow-up-right"></i>
                                        </a>
                                    </td>
                                    <td class="py-2"><a class="text-decoration-none" href="<?=__SYSTEM_ADMIN_URL__?>/mostrar-artigo?id=<?php echo $art['id']; ?>"><?php echo $art['titulo'];?></a></td>
                                    <td class="py-2"><?php echo date('d-m-Y', strtotime($art['created_at']))?></td>
                                    <td class="py-2">
                                        <?php if ($art['status'] == 1): ?>
                                            <a class="btn btn-success pe-none btn-sm" style="width: 4.5rem;">Ativo</a>
                                        <?php else: ?>
                                            <a class="btn btn-danger pe-none btn-sm" style="width: 4.5rem;">Inativo</a>
                                        <?php endif; ?>
                                    </td>
                                    <td class="py-2">
                                        <a class="btn btn-outline-primary btn-sm" href="<?=__SYSTEM_ADMIN_URL__?>/editar-artigo?id=<?php echo $art['id']; ?>">
                                            <i class="bi-pencil-square"></i>
                                        </a>
                                    </td>
                                    <td class="py-2">
                                        <a class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="bi-x-square"></i>
                                        </a>
                                    </td>
                                <?php endif; ?>
                            </tr>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content py-3">
                                        <div class="modal-header">
                                            <h2 class="modal-title fs-5 text-blue-light" id="exampleModalLabel">Excluir Artigo  <?='#'.$art['id']?></h2>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h3 class="mb-3 h6">Você realmente deseja excluir este artigo?</h3>
                                            <p class="text-blue-light fw-bold mb-2">Titulo do Artigo:</p>
                                            <p class="text-secondary-extra-light"><?=$art['titulo']?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <button typeof="submit" form="excluir" class="btn btn-outline-danger">Excluir</button>
                                        </div>
                                    </div>
                                    <form action="<?=__SYSTEM_ADMIN_URL__?>/salvar-excluir" method="POST" id="excluir" class="p-0">
                                        <div>
                                            <input type="hidden" name="id" value="<?php echo $art['id']; ?>" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <th class="text-center py-3" colspan="7">Nenhum registro foi encontrado.</th>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>

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
        </div>
    </div>
</section>

<?php
include __ADMIN_FOLDER__ . '/View/endLayout.php';
?>
