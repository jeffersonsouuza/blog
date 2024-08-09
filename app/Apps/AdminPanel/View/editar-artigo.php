<?php
include __PUBLIC_FOLDER__ . '/view/inicioHTML.php';
?>

<div id="container" class="bg-light m-5 p-3">
    <h1 class="fs-1 pb-3 form-text">Editar Artigo</h1>
    <form action="<?=__SYSTEM_ADMIN_URL__?>/salvar-edicao" method="POST">
        <p>
            <label class="form-label" for="titulo">Digite o novo título do artigo:</label>
            <input class="form-control" type="text" name="titulo" id="titulo" value="<?php echo $art['titulo']; ?>" />
        </p>
        <p>
            <label class="form-label" for="conteudo">Digite o novo conteúdo do artigo:</label>
            <textarea class="form-control" type="text" name="conteudo" id="titulo" rows="3"> <?php echo $art['conteudo']; ?></textarea>
        </p>
        <p>
            <input class="form-check-input" type="radio" name="status" value="1" id="ativar" checked>
            <label class="form-check-label" for="ativar">Ativo</label><br>
            <input class="form-check-input" type="radio" name="status" value="0" id="inativar">
            <label class="form-check-label" for="inativar">Inativo</label><br>
        </p>
        <p>
            <input type="hidden" name="id" value="<?php echo $art['id']; ?>" />
        </p>
        <p>
            <button class="btn btn-primary">Editar Artigo</button>
        </p>
    </form>
</div>

<?php
include __PUBLIC_FOLDER__ . '/view/finalHTML.php';
?>'
