<?php
include __PUBLIC_FOLDER__ . '/view/inicioHTML.php';
?>

<div class="bg-body-tertiary overflow-x-hidden">

    <div class="row m-0 w-100">
        <aside class="col-lg-2 ps-0 pe-1 position-fixed vh-100 overflow-y-auto">
            <?php require __ADMIN_FOLDER__ . '/View/sidebar.php'; ?>
        </aside>

        <main class="col-lg-10 px-0">
                <section class="col-lg-10 bg-white min-vh-100 px-md-4 w-100">
                    <?php require __ADMIN_FOLDER__ . '/View/navbar.php'; ?>

                    <?php require __PUBLIC_FOLDER__ . '/view/component/message.php'; ?>
