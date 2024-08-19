<?php

use app\Entity\Artigos\Status as StatusArtigo;

include __ADMIN_FOLDER__ . '/View/startLayout.php';
?>

<section class="overflow-auto bg-white p-4">
    <div class="container-fluid px-0">
        <section class="w-100 mb-4 mb-md-0" style="min-height: 8vh">
            <div class="row mb-3">
                <div class="col-md-6 px-0">
                    <h1 class="fw-bold main-title"><?=$title.' #'.$art['id']?></h1>
                </div>
                <div class="col-md-6 pt-3 pt-md-0 px-0 d-md-flex justify-content-md-end align-items-md-center">
                    <span>
                        <a type="button" class="btn btn-<?=StatusArtigo::ATIVO == $art['status']?'success':'danger'?> btn-sm pe-none">
                            <?=StatusArtigo::ATIVO == $art['status']?'Ativo':'Inativo'?>
                        </a>
                    </span>
                    <span data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Voltar">
                        <a type="button" href="javascript:history.back()" class="btn btn-outline-secondary ms-2">
                            <i class="bi-arrow-return-left"></i>
                        </a>
                    </span>
                    <span data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Visualizar">
                        <a type="button" href="" class="btn btn-outline-primary ms-2">
                            <i class="bi-box-arrow-up-right"></i>
                        </a>
                    </span>
                    <span data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Adicionar">
                        <a type="button" href="<?=__SYSTEM_ADMIN_URL__?>/novo-artigo" class="btn btn-outline-secondary ms-2">
                            <i class="bi-plus-lg"></i>
                        </a>
                    </span>
                    <span data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Editar">
                        <a type="button" href="<?=__SYSTEM_ADMIN_URL__?>/editar-artigo?id=<?php echo $art['id']; ?>" class="btn btn-outline-secondary ms-2">
                            <i class="bi-pencil-square"></i>
                        </a>
                    </span>
                    <span data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Excluir">
                        <button type="button" class="btn btn-outline-danger ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi-x-square"></i>
                        </button>
                    </span>
                </div>
            </div>
        <section

        <section class="mb-4">
            <nav class="" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a class="text-decoration-none text-secondary fw-bold fs-4" href="<?=__SYSTEM_ADMIN_URL__?>/dashboard">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a class="text-decoration-none text-secondary fw-bold fs-4" href="<?=__SYSTEM_ADMIN_URL__?>/listar-artigos">
                            Artigos
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span class="badge bg-secondary-extra-light text-secondary fw-bold fs-4">Visualizar Artigo</span>
                    </li>
                </ol>
            </nav>
        </section>

        <section class="bg-white mb-3" style="min-height: 70vh">
            <div class="row">
                <div class="col-lg-8 col-xl-6 position-relative px-0">
                    <div class="mb-3">
                        <label class="form-label m-1" for="titulo">Título do artigo:</label>
                        <input class="form-control bg-transparent" type="text" name="titulo" id="titulo" value="<?php echo $art['titulo']; ?>" disabled/>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label m-1">Status:</label>
                        <input class="form-control bg-transparent" type="text" id="status" name="status" value="<?= StatusArtigo::name($art['status'])?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label m-1" for="conteudo">Conteúdo do artigo:</label>
                        <textarea class="form-control bg-transparent" name="conteudo" id="titulo" rows="13" disabled><?=$art['conteudo']?></textarea>
                    </div>
                </div>

                <div class="col-lg-4 col-xl-6">

                </div>
            </div>
        </section>
    </div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5 text-blue-light" id="exampleModalLabel">Excluir Artigo <?='#'.$art['id']?></h2>
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

<?php
include __ADMIN_FOLDER__ . '/View/endLayout.php';
?>
