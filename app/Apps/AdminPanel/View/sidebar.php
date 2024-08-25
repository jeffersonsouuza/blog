<nav id="sidebarMenu" class="d-lg-block bg-white sidebar collapse d-print-none min-vh-100 px-3 p-xxl-3">
    <div class="imagem-sidebar d-flex justify-content-center align-items-center mb-3" style="min-height: 5rem">
        <a class="navbar-brand" href="<?=__SYSTEM_ADMIN_URL__?>/dashboard">
            <figure class="">
                <img class="logo-light" src="<?=__SYSTEM_ROOT_URL__?>/public/imagens/logo-brasatour.png" width="2929" height="512" alt="<?=$lang['logo']?>">
                <img class="logo-dark" src="<?=__SYSTEM_ROOT_URL__?>/public/imagens/logo-brasatour-dark-theme.png" width="2929" height="512" alt="<?=$lang['logo']?>">
            </figure>
        </a>
    </div>
    <div class="">
        <div class="d-flex justify-content-center align-items-center mb-5">
            <a href="<?=__SYSTEM_ADMIN_URL__?>/novo-artigo" type="button"
               class="btn btn-outline-primary rounded-pill shadow-sm text-uppercase w-100 new-article">
                <i class="bi-plus"></i>
                <?=$lang['new-article']?>
            </a>
        </div>
        <div class="mb-4">
            <p class="ms-2 ms-xl-3 text-uppercase text-secondary-extra-light">menu</p>
            <ul class="navbar-nav flex-column list-group">
                <li class="nav-item list-group-item border border-0 p-0 ms-lg-2 ms-xl-3 bg-white text-secondary">
                    <a class="nav-link" aria-current="page" href="<?=__SYSTEM_ADMIN_URL__?>/dashboard">
                        <i class="bi-speedometer2 me-2"></i>
                        <?=$lang['dashboard']?>
                    </a>
                </li>
                <li class="nav-item list-group-item border border-0 p-0 ms-lg-2 ms-xl-3 bg-white text-secondary">
                    <a class="nav-link" aria-current="page" href="<?=__SYSTEM_ADMIN_URL__?>/listar-artigos">
                        <i class="bi-card-text me-2"></i>
                        <?=$lang['article'][1]?>
                    </a>
                </li>
            </ul>
        </div>
        <div>
            <p class="ms-2 ms-xl-3 text-uppercase text-secondary-extra-light"><?=$lang['setting'][1]?></p>
            <ul class="navbar-nav flex-column list-group">
                <li class="nav-item list-group-item bg-white border border-0 p-0 ms-lg-2 ms-xl-3">
                    <a class="nav-link click-area text-secondary" aria-current="page" href="#collapseExample"
                       data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <i class="bi-person me-2"></i>
                        <?=$lang['profile']?>
                        <i class="bi-caret-down-fill fs-4" id="toggleIconUser"></i>
                    </a>
                    <div class="collapse bg-white" id="collapseExample">
                        <ul class="navbar-nav flex-column list-group text-secondary-extra-light">
                            <li class="mb-3">
                                <a class="dropdown-item" href="<?=__SYSTEM_ADMIN_URL__?>/usuario">
                                    <i class="bi-arrow-return-right mx-1"></i>
                                    <?=$lang['account-details']?>
                                </a>
                            </li>
                            <li class="mb-3">
                                <a class="dropdown-item" href="<?=__SYSTEM_ADMIN_URL__?>/alterar-senha">
                                    <i class="bi-arrow-return-right mx-1"></i>
                                    <?=$lang['change-password']?>
                                </a>
                            </li>
                            <li class="mb-3">
                                <a class="dropdown-item" href="<?=__SYSTEM_ADMIN_URL__?>/cadastrar-usuario">
                                    <i class="bi-arrow-return-right mx-1"></i>
                                    <?=$lang['register-user']?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <hr class="my-5">
        <div>
            <ul class="navbar-nav flex-column list-group pe-3">
                <li class="nav-item list-group-item border border-0 text-danger p-0 ms-lg-2 ms-xl-3 bg-white">
                    <a class="nav-link fw-medium" aria-current="page" href="">
                        <i class="bi-box-arrow-up-right me-2"></i>
                        <?=$lang['access-blog']?>
                    </a>
                </li>
                <li class="nav-item list-group-item border border-0 p-0 mb-2 ms-lg-2 ms-xl-3 bg-white text-secondary">
                    <a class="nav-link" aria-current="page" href="<?=__SYSTEM_ADMIN_URL__?>/logout">
                        <i class="bi-box-arrow-right me-2"></i>
                        <?=$lang['sign-out']?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
