<?php

use app\Entity\Artigos\Status as StatusArtigo;

include __ADMIN_FOLDER__ . '/View/startLayout.php';
?>

<section class="overflow-auto bg-white p-4">
    <div class="container-fluid px-0">
        <section class="w-100 mb-4 mb-md-0">
            <div class="row mb-3 py-0">
                <div class="col-md-6 px-0">
                    <h1 class="fw-bold h2 text-danger"><?=$title.' #'.$art['id']?></h1>
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
                    <span data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Excluir">
                        <button type="button" class="btn btn-outline-danger ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi-x-square"></i>
                        </button>
                    </span>
                </div>
            </div>
        </section>

        <section class="mb-4">
            <nav class="" style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a class="text-decoration-none fw-medium text-secondary-light fs-4" href="<?=__SYSTEM_ADMIN_URL__?>/dashboard">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a class="text-decoration-none text-secondary-light fw-medium fs-4" href="<?=__SYSTEM_ADMIN_URL__?>/listar-artigos">
                            Artigos
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span class="text-active fw-medium fs-4">Editar</span>
                    </li>
                </ol>
            </nav>
        </section>

        <section class="bg-white mb-3" style="min-height: 70vh">
            <form action="<?=__SYSTEM_ADMIN_URL__?>/salvar-edicao" method="POST" class="p-0 needs-validation" novalidate>
                <div class="row">
                    <div class="col-lg-8 col-xl-6 position-relative px-0">
                        <div class="mb-3">
                            <label class="form-label ms-1 mb-2 h6 text-secondary-extra-light fw-bold" id="label" for="titulo">Digite o novo título do artigo:</label>
                            <input class="form-control" type="text" name="titulo" id="titulo" value="<?php echo $art['titulo']; ?>" required/>
                            <div class="invalid-feedback">Preencha o titulo corretamente.</div>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label ms-1 mb-2 h6 text-secondary-extra-light fw-bold">Status</label>
                            <select class="form-select" id="status" name="status" required>
                                <option value="<?= StatusArtigo::ATIVO?>" <?= $art['status'] === StatusArtigo::ATIVO ? 'selected' : '' ?>>
                                    <?= StatusArtigo::name(StatusArtigo::ATIVO)?>
                                </option>
                                <option value="<?= StatusArtigo::INATIVO?>" <?= $art['status'] === StatusArtigo::INATIVO ? 'selected' : '' ?>>
                                    <?= StatusArtigo::name(StatusArtigo::INATIVO)?>
                                </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label ms-1 mb-2 h6 text-secondary-extra-light fw-bold" for="conteudo">Digite o novo conteúdo do artigo:</label>
                            <textarea class="form-control" name="conteudo" id="titulo" rows="13" required><?=$art['conteudo']?></textarea>
                            <div class="invalid-feedback">Preencha o conteúdo corretamente.</div>
                        </div>
                        <div>
                            <input type="hidden" name="id" value="<?php echo $art['id']; ?>" />
                        </div>
                        <div class="col-md-6 my-4 w-100">
                            <button type="submit" class="btn btn-primary w-100">Editar Artigo</button>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xl-6">

                    </div>
                </div>
            </form>
        </section>
    </div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-white">
            <div class="modal-header">
                <h2 class="modal-title h3 text-secondary" id="exampleModalLabel">Excluir Artigo <?='#'.$art['id']?></h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h3 class="mb-3 h5">Você realmente deseja excluir este artigo?</h3>
                <p class="text-secondary fw-bold mb-2">Titulo do Artigo:</p>
                <p class="text-active"><?=$art['titulo']?></p>
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
