<?php

use app\Core\DatabaseConnection;
use app\Entity\Administrator\Usuario;

$usuarios = new Usuario( DatabaseConnection::create());
$usuario = $usuarios->exibirDadosUsuario($_SESSION['id_usuario']);
?>

<nav id="navbarMenu" class="navbar navbar-expand-lg bg-white d-none d-lg-block">
    <div class="container-fluid py-2">
        <div class="col-md-3 col-lg-5">
            <h2 class="fw-bold m-0 nav-title fs-6 mb-1"><span class="periodo-do-dia"></span>, <?=strtok($usuario[0]['nome'], ' ')?></h2>
            <p class="data-atual"></p>
        </div>
        <div class="col-md-6 col-lg-7 d-flex align-items-center justify-content-end perfil-usuario">
            <div class="text-end">
                <p class="py-0 my-0 text-secondary fw-bold"><?=$usuario[0]['nome']?></p>
                <p class="navbar-text py-0 my-0">Administrador</p>
            </div>
            <div class="dropdown">
                <div class="area-click-nav" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi-person-circle fs-4 ms-4"></i>
                    <i class="bi-arrow-down-short fs-6" id="toggle-class-nav"></i>
                </div>
                <ul class="dropdown-menu dropdown-menu-end shadow-sm mt-4 py-4 px-2">
                    <li class="">
                        <a class="dropdown-item py-3" href="<?=__SYSTEM_ADMIN_URL__?>/usuario">
                            <i class="bi-person mx-2"></i>
                            Perfil do Usuário
                        </a>
                    </li>
                    <li class="">
                        <a class="dropdown-item py-3" href="<?=__SYSTEM_ADMIN_URL__?>/alterar-senha">
                            <i class="bi-lock mx-2"></i>
                            Alterar Senha
                        </a>
                    </li>
                    <li class="">
                        <a class="dropdown-item py-3" href="<?=__SYSTEM_ADMIN_URL__?>/cadastrar-usuario">
                            <i class="bi-person-plus mx-2"></i>
                            Cadastrar Usuário
                        </a>
                    </li>
                    <li class="">
                        <a class="dropdown-item py-3" href="<?=__SYSTEM_ADMIN_URL__?>/logout">
                            <i class="bi-box-arrow-right mx-2"></i>
                            Sair
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<nav id="navbarMenuMobile" class="navbar navbar-expand-lg bg-white d-lg-none mb-3">
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center">
            <a class="navbar-brand" href="<?=__SYSTEM_ADMIN_URL__?>/dashboard">
                <figure class="">
                    <img src="<?=__SYSTEM_ROOT_URL__?>/public/imagens/logo-brasatour.png" width="2929" height="512" alt="Logo BrasaTour">
                </figure>
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<div class="offcanvas offcanvas-start w-100" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
        <div class="d-flex justify-content-center align-items-center">
            <a class="navbar-brand" href="<?=__SYSTEM_ADMIN_URL__?>/dashboard">
                <figure class="">
                    <img src="<?=__SYSTEM_ROOT_URL__?>/public/imagens/logo-brasatour.png" width="2929" height="512" alt="Logo BrasaTour">
                </figure>
            </a>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="container-fluid p-3">
            <p class="text-uppercase text-body-secondary mb-3">menu</p>
            <ul class="list-group mb-3">
                <li class="list-group-item bg-body-tertiary border border-0 rounded-1 shadow-sm mb-4 p-4">
                    <a class="text-capitalize text-decoration-none text-secondary fw-bold" href="<?=__SYSTEM_ADMIN_URL__?>/dashboard">
                        Dashboard
                    </a>
                </li>
                <li class="list-group-item bg-body-tertiary border border-0 rounded-1 shadow-sm mb-4 p-4">
                    <a class="text-capitalize text-decoration-none text-secondary fw-bold" href="<?=__SYSTEM_ADMIN_URL__?>/listar-artigos">
                        Artigos
                    </a>
                </li>
            </ul>
        </div>

        <div class="container-fluid p-3">
            <p class="text-uppercase text-body-secondary mb-3">configurações</p>
            <ul class="list-group mb-3">
                <li class="list-group-item bg-body-tertiary border border-0 rounded-1 shadow-sm mb-4 p-4">
                    <a class="text-capitalize text-decoration-none text-secondary fw-bold" href="#collapseExample"
                       data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Perfil
                        <i class="bi-arrow-down-short" id="toggleIconUser"></i>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="navbar-nav flex-column list-group">
                            <li class="my-3">
                                <a class="dropdown-item" href="<?=__SYSTEM_ADMIN_URL__?>/usuario">
                                    <i class="bi-arrow-return-right mx-2"></i>
                                    Dados da Conta
                                </a>
                            </li>
                            <li class="mb-3">
                                <a class="dropdown-item" href="<?=__SYSTEM_ADMIN_URL__?>/alterar-senha">
                                    <i class="bi-arrow-return-right mx-2"></i>
                                    Alterar Senha
                                </a>
                            </li>
                            <li class="mb-3">
                                <a class="dropdown-item" href="<?=__SYSTEM_ADMIN_URL__?>/cadastrar-usuario">
                                    <i class="bi-arrow-return-right mx-2"></i>
                                    Cadastrar Usuário
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

        <div class="container-fluid p-3">
            <ul class="list-group mb-3">
                <li class="list-group-item shadow-sm px-4 py-3">
                    <a class="text-capitalize text-decoration-none text-danger fw-bold" href="<?=__SYSTEM_ADMIN_URL__?>/dashboard">
                        <i class="bi-box-arrow-up-right fs-5 me-2 me-xl-3"></i>
                        Ver Blog
                    </a>
                </li>
                <li class="list-group-item shadow-sm px-4 py-3">
                    <a class="text-capitalize text-decoration-none text-secondary fw-bold" href="<?=__SYSTEM_ADMIN_URL__?>/logout">
                        <i class="bi-box-arrow-right fs-5 me-2 me-xl-3"></i>
                        Sair
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
