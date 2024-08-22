<?php

use app\Core\DatabaseConnection;
use app\Entity\Usuarios\User;

$usuarios = new User( DatabaseConnection::create());
$usuario = $usuarios->exibirDadosUsuario($_SESSION['id_usuario']);
?>

<nav id="navbarMenu" class="navbar navbar-expand-lg bg-white d-none d-lg-block px-md-4 shadow-sm">
    <div class="container-fluid px-0 py-2">
        <div class="col-md-3 col-lg-5">
            <h2 class="text-secondary fw-medium m-0 h4 mb-1">
                <span class="period-of-the-day"></span>, <?=strtok($usuario[0]['nome'], ' ')?>
            </h2>
            <p class="current-date text-secondary-extra-light"></p>
        </div>
        <div class="col-md-6 col-lg-7">
            <ul class="navbar-nav d-flex align-items-center justify-content-end">
                <li class="nav-item d-flex align-items-center justify-content-end user-profile border-end px-3">
                    <div class="text-end">
                        <p class="py-0 my-0 text-secondary fw-medium"><?=$usuario[0]['nome']?></p>
<!--                        <p class="py-0 my-0 text-secondary-extra-light">Administrador</p>-->
                    </div>
                    <div class="dropdown">
                        <div class="click-area-nav" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-person-circle ms-3 text-secondary-extra-light" style="font-size: 1.1rem"></i>
                            <i class="bi-caret-down-fill fs-4 text-secondary-extra-light" id="toggle-class-nav"></i>
                        </div>
                        <ul class="dropdown-menu dropdown-menu-end shadow-sm mt-4 p-4 bg-white">
                            <li class="">
                                <a class="dropdown-item py-3 text-secondary" href="<?=__SYSTEM_ADMIN_URL__?>/usuario">
                                    <i class="bi-person mx-2 text-danger"></i>
                                    Perfil do Usuário
                                </a>
                            </li>
                            <li class="">
                                <a class="dropdown-item py-3 text-secondary" href="<?=__SYSTEM_ADMIN_URL__?>/alterar-senha">
                                    <i class="bi-lock mx-2 text-danger"></i>
                                    Alterar Senha
                                </a>
                            </li>
                            <li class="">
                                <a class="dropdown-item py-3 text-secondary" href="<?=__SYSTEM_ADMIN_URL__?>/cadastrar-usuario">
                                    <i class="bi-person-plus mx-2 text-danger"></i>
                                    Cadastrar Usuário
                                </a>
                            </li>
                            <li class="">
                                <a class="dropdown-item py-3 text-secondary" href="<?=__SYSTEM_ADMIN_URL__?>/logout">
                                    <i class="bi-box-arrow-right mx-2 text-danger"></i>
                                    Sair
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item px-3">
                    <div class="dropdown">
                        <div class="click-area-theme" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-moon-stars-fill text-secondary-extra-light" id="toggleThemeIcon" style="font-size: 1.1rem"></i>
                            <i class="bi-caret-down-fill fs-4 text-secondary-extra-light" id="toggle-class-theme"></i>
                        </div>
                        <ul class="dropdown-menu dropdown-menu-end shadow-sm mt-4 p-4 bg-white">
                            <li class="toggleThemeLight">
                                <a type="button" class="dropdown-item py-3 text-secondary">
                                    <i class="bi-brightness-high-fill mx-2 text-danger"></i>
                                    Light
                                </a>
                            </li>
                            <li class="toggleThemeDark">
                                <a type="button" class="dropdown-item py-3 text-secondary">
                                    <i class="bi-moon-stars-fill mx-2 text-danger"></i>
                                    Dark
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<nav id="navbarMenuMobile" class="navbar navbar-expand-lg bg-white d-lg-none shadow-sm">
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center">
            <a class="navbar-brand" href="<?=__SYSTEM_ADMIN_URL__?>/dashboard">
                <figure class="">
                    <img class="logo-light" src="<?=__SYSTEM_ROOT_URL__?>/public/imagens/logo-brasatour.png" width="2929" height="512" alt="Logo BrasaTour">
                    <img class="logo-dark" src="<?=__SYSTEM_ROOT_URL__?>/public/imagens/logo-brasatour-dark-theme.png" width="2929" height="512" alt="Logo BrasaTour">
                </figure>
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<div class="offcanvas offcanvas-start bg-white w-100" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
        <div class="d-flex justify-content-center align-items-center">
            <a class="navbar-brand" href="<?=__SYSTEM_ADMIN_URL__?>/dashboard">
                <figure class="">
                    <img class="logo-light" src="<?=__SYSTEM_ROOT_URL__?>/public/imagens/logo-brasatour.png" width="2929" height="512" alt="Logo BrasaTour">
                    <img class="logo-dark" src="<?=__SYSTEM_ROOT_URL__?>/public/imagens/logo-brasatour-dark-theme.png" width="2929" height="512" alt="Logo BrasaTour">
                </figure>
            </a>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="container-fluid p-3">
            <p class="text-uppercase text-secondary-extra-light mb-3 fs-3">menu</p>
            <ul class="list-group mb-3">
                <li class="list-group-item bg-body-tertiary border border-0 rounded-1 shadow-sm mb-4 p-4">
                    <a class="text-capitalize text-decoration-none text-secondary fw-bold fs-1" href="<?=__SYSTEM_ADMIN_URL__?>/dashboard">
                        Dashboard
                    </a>
                </li>
                <li class="list-group-item bg-body-tertiary border border-0 rounded-1 shadow-sm mb-4 p-4">
                    <a class="text-capitalize text-decoration-none text-secondary fw-bold fs-1" href="<?=__SYSTEM_ADMIN_URL__?>/listar-artigos">
                        Artigos
                    </a>
                </li>
            </ul>
        </div>

        <div class="container-fluid p-3">
            <p class="text-uppercase text-secondary-extra-light mb-3 fs-3">configurações</p>
            <ul class="list-group mb-3">
                <li class="list-group-item bg-body-tertiary border border-0 rounded-1 shadow-sm mb-4 p-4 nav-user-mobile">
                    <a class="text-capitalize text-decoration-none text-secondary fw-bold fs-1" href="#collapseExample"
                       data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Perfil
                        <i class="bi-caret-down-fill fs-4" id="toggle-icon-user-mobile"></i>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="navbar-nav flex-column list-group text-secondary-extra-light">
                            <li class="my-3">
                                <a class="dropdown-item" href="<?=__SYSTEM_ADMIN_URL__?>/usuario">
                                    <i class="bi-arrow-return-right mx-2 text-danger"></i>
                                    Dados da Conta
                                </a>
                            </li>
                            <li class="mb-3">
                                <a class="dropdown-item" href="<?=__SYSTEM_ADMIN_URL__?>/alterar-senha">
                                    <i class="bi-arrow-return-right mx-2 text-danger"></i>
                                    Alterar Senha
                                </a>
                            </li>
                            <li class="mb-3">
                                <a class="dropdown-item" href="<?=__SYSTEM_ADMIN_URL__?>/cadastrar-usuario">
                                    <i class="bi-arrow-return-right mx-2 text-danger"></i>
                                    Cadastrar Usuário
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

        <div class="container-fluid p-3">
            <ul class="list-group">
                <li class="list-group-item shadow-sm px-4 py-3 bg-body-tertiary">
                    <a class="text-capitalize text-decoration-none text-danger fw-bold fs-1" href="<?=__SYSTEM_ADMIN_URL__?>/dashboard">
                        <i class="bi-box-arrow-up-right fs-1 me-2 me-xl-3"></i>
                        Ver Blog
                    </a>
                </li>
                <li class="list-group-item shadow-sm px-4 py-3 bg-body-tertiary">
                    <a class="text-capitalize text-decoration-none text-secondary fw-bold fs-1" href="<?=__SYSTEM_ADMIN_URL__?>/logout">
                        <i class="bi-box-arrow-right fs-1 me-2 me-xl-3"></i>
                        Sair
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
