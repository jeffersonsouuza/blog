<?php

global $lang;

use app\Entity\Artigos\Status as StatusArtigo;

require_once 'app/Core/languageHandler.php';
$title = $lang['new-article'];

include __ADMIN_FOLDER__ . '/View/startLayout.php';
?>

<section class="overflow-auto bg-white p-4">
    <div class="container-fluid px-0">
        <section class="w-100 mb-4 mb-md-0">
            <div class="row mb-3">
                <div class="col-md-6 px-0">
                    <h1 class="fw-bold h2 text-danger"><?=$title?></h1>
                </div>
                <div class="col-md-6 pt-3 pt-md-0 px-0 d-md-flex justify-content-md-end align-items-md-center">
                    <span data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="<?=$lang['return']?>">
                        <a type="button" href="javascript:history.back()" class="btn btn-outline-secondary ms-2">
                            <i class="bi-arrow-return-left"></i>
                        </a>
                    </span>
                </div>
            </div>
        </section>

        <section class="mb-4">
            <nav class="" style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a class="text-decoration-none fw-medium text-secondary-light fs-4" href="<?=__SYSTEM_ADMIN_URL__?>/dashboard">
                            <?=$lang['home']?>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a class="text-decoration-none text-secondary-light fw-medium fs-4" href="<?=__SYSTEM_ADMIN_URL__?>/listar-artigos">
                            <?=$lang['article'][1]?>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span class="text-active fw-medium fs-4"><?=$lang['new-article']?></span>
                    </li>
                </ol>
            </nav>
        </section>

        <section class="bg-white  mb-3" style="min-height: 70vh">
            <form action="<?=__SYSTEM_ADMIN_URL__?>/salvar-artigo" method="POST" class="p-0 needs-validation" novalidate>
                <div class="row">
                    <div class="col-lg-8 col-xl-6 position-relative px-0">
                        <div class="mb-3">
                            <label class="form-label ms-1 mb-2 h6 text-secondary-extra-light fw-bold" for="titulo"><?=$lang['label-new-article']?>:</label>
                            <input class="form-control" type="text" name="titulo" id="titulo" value="" required/>
                            <div class="invalid-feedback"><?=$lang['invalid-new-article']?>.</div>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label ms-1 mb-2 h6 text-secondary-extra-light fw-bold">Status</label>
                            <select class="form-select" id="status" name="status" required>
                                <option class="text-active bg-secondary" value="<?= StatusArtigo::ATIVO?>">
                                    <?= StatusArtigo::name(StatusArtigo::ATIVO)?>
                                </option>
                                <option class="text-active bg-secondary" value="<?= StatusArtigo::INATIVO?>">
                                    <?= StatusArtigo::name(StatusArtigo::INATIVO)?>
                                </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label ms-1 mb-2 h6 text-secondary-extra-light fw-bold" for="conteudo"><?=$lang['label-new-content']?>:</label>
                            <textarea class="form-control" name="conteudo" id="titulo" rows="13" required></textarea>
                            <div class="invalid-feedback"><?=$lang['invalid-new-content']?>.</div>
                        </div>
                        <div class="col-md-6 my-4 w-100">
                            <button type="submit" class="btn btn-primary w-100"><?=$lang['create-new-article']?></button>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xl-6">

                    </div>
                </div>
            </form>
        </section>
    </div>
</section>

<?php
include __ADMIN_FOLDER__ . '/View/endLayout.php';
?>