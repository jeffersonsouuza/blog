<?php
include __PUBLIC_FOLDER__ . '/view/startHTML.php';
?>

    <section id="container" class="bg-light mx-5 my-4 p-5">
        <h1 class="fs-1 pb-3">Artigos:</h1>

        <form action="" >

            <div class="input-group my-4">
                <input type="text" name="buscar" class="form-control" placeholder="Digite os termos de pesquisa" aria-label="Digite os temos de pesquisa" aria-describedby="button-addon2"
                       value="<?php if (isset($_GET['buscar'])) { echo $_GET['buscar']; }?>">
                <button class="btn btn-outline-primary" type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
            </div>

        </form>

        <?php foreach ($artigos as $artigo): ?>
            <?php if ($artigo['status'] == 1): ?>
                <h2>
                    <a href="/blog-php/index.php/artigo?id=<?php echo $artigo['id']; ?>">
                        <?php echo $artigo['titulo']; ?>
                    </a>
                </h2>
                <p>
                    <?php echo nl2br($artigo['conteudo']); ?>
                </p>
            <?php endif ?>
        <?php endforeach; ?>

    </section>

<?php
include __PUBLIC_FOLDER__ . '/view/endHTML.php';
?>