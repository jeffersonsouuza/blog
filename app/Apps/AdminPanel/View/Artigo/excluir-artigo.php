<?php
include __ADMIN_FOLDER__ . '/View/layoutInicio.php';
?>

<div id="container" class="bg-light m-5 p-3">
    <h1 class="form-text fs-3 pb-3">Você realmente deseja excluir o artigo?</h1>
    <form method="POST" action="<?=__SYSTEM_ADMIN_URL__?>/salvar-excluir">
        <h5> Titulo do Artigo: </h5>
        <p><?php echo $art['titulo'] ?></p>

        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
        <button class="btn btn-primary">Excluir</button>

    </form>
</div>

<?php
include __ADMIN_FOLDER__ . '/View/layoutFinal.php';
?>