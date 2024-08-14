<!--    exibir mensagem de erro ou sucesso-->
<?php if (isset($_SESSION['mensagem'])): ?>
    <div class="alert alert-<?= $_SESSION['tipo_mensagem'] ?> p-3">
        <?= $_SESSION['mensagem'] ?>
    </div>
    <?php
    unset($_SESSION['mensagem'], $_SESSION['tipo_mensagem']);
endif;
?>