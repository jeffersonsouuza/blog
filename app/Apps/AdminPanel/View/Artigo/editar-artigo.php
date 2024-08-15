<?php

use app\Entity\Artigos\Status as StatusArtigo;

include __ADMIN_FOLDER__ . '/View/layoutInicio.php';
?>

<section class="lista-artigos overflow-auto">
    <div class="container-fluid pb-3 pt-2">
        <div class="row mb-3">
            <div class="d-flex justify-content-between align-items-center p-0">
                <h1 class="fw-bold main-title"><?=$title?></h1>
                <div>
                    <span data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Voltar">
                        <a type="button" href="javascript:history.back()" class="btn btn-outline-secondary btn-sm ms-2">
                            <i class="bi-arrow-return-left"></i>
                        </a>
                    </span>
                    <span data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Visualizar">
                        <a type="button" href="" class="btn btn-outline-primary btn-sm ms-2">
                            <i class="bi-box-arrow-up-right"></i>
                        </a>
                    </span>
                    <span data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Adicionar">
                        <a type="button" href="<?=__SYSTEM_ADMIN_URL__?>/novo-artigo" class="btn btn-outline-secondary btn-sm ms-2">
                            <i class="bi-plus-lg"></i>
                        </a>
                    </span>
                    <span data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Excluir">
                        <a type="button" href="<?=__SYSTEM_ADMIN_URL__?>/salvar-excluir" class="btn btn-outline-danger btn-sm ms-2"
                           data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi-x-square"></i>
                        </a>
                    </span>
                </div>
            </div>
        </div>

        <hr class="mb-3">

        <form action="<?=__SYSTEM_ADMIN_URL__?>/salvar-edicao" method="POST" class="p-0 needs-validation" novalidate>
            <div class="row">
                <div class="col-lg-8 col-xl-6 position-relative px-0">
                    <div class="mb-3">
                        <label class="form-label m-1 m-1" for="titulo">Digite o novo título do artigo:</label>
                        <input class="form-control" type="text" name="titulo" id="titulo" value="<?php echo $art['titulo']; ?>" required/>
                        <div class="invalid-feedback">Preencha o titulo corretamente.</div>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label m-1">Status</label>
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
                        <label class="form-label m-1" for="conteudo">Digite o novo conteúdo do artigo:</label>
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
    </div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-blue-light" id="exampleModalLabel">Excluir Artigo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-3">Você realmente deseja excluir este artigo?</p>
                <p class="text-blue-extra-light"><span class="text-blue-light fw-bold">Titulo:</span> <?=$art['titulo']?></p>
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
include __ADMIN_FOLDER__ . '/View/layoutFinal.php';
?>
