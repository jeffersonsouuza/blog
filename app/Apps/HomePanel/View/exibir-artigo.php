<?php
include __PUBLIC_FOLDER__ . '/view/inicioHTML.php';
?>

<div id="container" class="bg-light m-5 p-3">
    <h1 class="form-text fs-3 pb-3">Artigo Selecionado</h1>
    <h2>
        <?php echo $artigo['titulo']; ?>
    </h2>
    <p>
        <?php echo nl2br($artigo['conteudo']); ?>
    </p>
    <div>
        <a class="btn btn-primary" href="<?=__SYSTEM_URL__?>/listar-artigos">Voltar</a>
    </div>
</div>

<?php
include __PUBLIC_FOLDER__ . '/view/finalHTML.php';
?>
