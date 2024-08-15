<?php
use app\Entity\Artigos\Status as StatusArtigo;

include __ADMIN_FOLDER__ . '/View/layoutInicio.php';
?>

<section class="overflow-auto">
    <div class="container-fluid pb-3 pt-2">
        <div class="row mb-3 w-100 p-0">
            <div class="col-md-6 px-0">
                <h1 class="fw-bold main-title"><?=$title?></h1>
            </div>
            <div class="col-md-6 pt-3 pt-md-0 px-0 d-md-flex justify-content-md-end align-items-md-center">
                <span data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Voltar">
                    <a type="button" href="javascript:history.back()" class="btn btn-outline-secondary btn-sm ms-2">
                        <i class="bi-arrow-return-left"></i>
                    </a>
                </span>
            </div>
        </div>

        <hr class="mb-3">

        <form action="<?=__SYSTEM_ADMIN_URL__?>/salvar-artigo" method="POST" class="p-0 needs-validation" novalidate>
            <div class="row">
                <div class="col-lg-8 col-xl-6 position-relative px-0">
                    <div class="mb-3">
                        <label class="form-label m-1 m-1" for="titulo">Digite o novo título do artigo:</label>
                        <input class="form-control" type="text" name="titulo" id="titulo" value="" required/>
                        <div class="invalid-feedback">Preencha o titulo corretamente.</div>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label m-1">Status</label>
                        <select class="form-select" id="status" name="status" required>
                            <option value="<?= StatusArtigo::ATIVO?>">Ativo</option>
                            <option value="<?= StatusArtigo::INATIVO?>">Inativo</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label m-1" for="conteudo">Digite o novo conteúdo do artigo:</label>
                        <textarea class="form-control" name="conteudo" id="titulo" rows="13" required></textarea>
                        <div class="invalid-feedback">Preencha o conteúdo corretamente.</div>
                    </div>
                    <div class="col-md-6 my-4 w-100">
                        <button type="submit" class="btn btn-primary w-100">Criar Artigo</button>
                    </div>
                </div>

                <div class="col-lg-4 col-xl-6">

                </div>
            </div>
        </form>
    </div>
</section>

<?php
include __ADMIN_FOLDER__ . '/View/layoutFinal.php';
?>