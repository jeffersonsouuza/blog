<?php
include __DIR__ . '/html/inicioHTML.php';
?>

<div id="container" class="bg-light m-5 p-3">
    <div class="m-5">
    <h1 class="fs-1 pb-3">Adicionar Artigo</h1>
    <form action="/blog-php/index.php/salvar-artigo" method="POST">
        <p>
            <label for="titulo" class="form-label">Digite o título do artigo</label>
            <input class="campo-form form-control form-control-lg" type="text" name="titulo" id="titulo" />
        </p>
        <p>
            <label for="conteudo" class="form-label">Digite o conteúdo do artigo</label>
            <textarea class="campo-form form-control" type="text" name="conteudo" id="conteudo"></textarea>
        </p>
        <p>
            <input type="radio" id="ativar" name="status" class="form-check-input" value="1" checked>
            <label for="ativar" class="form-check-label">Ativo</label><br>
            <input type="radio" id="inativar" name="status" class="form-check-input" value="0">
            <label for="inativar" class="form-check-label">Inativo</label><br>
        </p>
        <p>
            <button class="btn btn-primary">Criar Artigo</button>
        </p>
    </form>
    </div>
</div>

<?php
include __DIR__ . '/html/finalHTML.php';
?>
