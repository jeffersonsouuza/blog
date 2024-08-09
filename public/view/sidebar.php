<nav id="sidebarMenu" class="d-lg-block rounded bg-white sidebar collapse d-print-none vh-100 shadow-sm ">
    <div class="pt-3 mb-4">
        <a class="navbar-brand" href="<?=__SYSTEM_ADMIN_URL__?>/dashboard">
            <figure class="d-flex justify-content-center align-items-center m-0">
                <img src="../../public/imagens/logo-brasatour.png" width="2929" height="512" alt="Logo BrasaTour">
            </figure>
        </a>
    </div>
    <div class="px-2">
        <div class="d-flex justify-content-center align-items-center mb-4">
            <a href="<?=__SYSTEM_ADMIN_URL__?>/novo-artigo" type="button"
               class="btn btn-outline-primary rounded-pill shadow-sm text-uppercase w-100 novo-artigo">
                <i class="bi-plus"></i>
                Novo Artigo
            </a>
        </div>
        <p class="ms-2 ms-xl-3 text-uppercase text-body-secondary">menu</p>
        <ul class="navbar-nav flex-column list-group">
            <li class="nav-item list-group-item border border-0 p-0 ms-lg-2 ms-xl-3">
                <a class="nav-link" aria-current="page" href="<?=__SYSTEM_ADMIN_URL__?>/dashboard">
                    <i class="bi-speedometer2 fs-5 me-2 me-xl-3"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item list-group-item  border border-0 p-0 ms-lg-2 ms-xl-3">
                <a class="nav-link" aria-current="page" href="<?=__SYSTEM_ADMIN_URL__?>/listar-artigos">
                    <i class="bi-card-text fs-5 me-2 me-xl-3"></i>
                    Artigos
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-column list-group pe-3">
            <li class="border-bottom border-success mb-2"></li>
            <li class="nav-item list-group-item border border-0 p-0 ms-lg-2 ms-xl-3">
                <a class="nav-link fw-medium" aria-current="page" href="">
                    <i class="bi-box-arrow-up-right fs-5 me-2 me-xl-3"></i>
                    Ver Blog
                </a>
            </li>
            <li class="nav-item list-group-item border border-0 p-0 mb-2 ms-lg-2 ms-xl-3">
                <a class="nav-link" aria-current="page" href="<?=__SYSTEM_ADMIN_URL__?>/logout">
                    <i class="bi-box-arrow-right fs-5 me-2 me-xl-3"></i>
                    Sair
                </a>
            </li>
        </ul>
    </div>
</nav>
