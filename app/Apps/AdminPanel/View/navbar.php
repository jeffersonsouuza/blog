<nav id="navbarMenu" class="navbar navbar-expand-lg bg-white d-none d-lg-block">
    <div class="container-fluid py-2">
        <div class="col-md-3 col-lg-5">
            <h2 class="fw-bold m-0 main-title fs-6">Bom dia, Jefferson</h2>
            <p>Segunda, 23 de maio de 2024</p>
        </div>
        <div class="col-md-6 col-lg-7 d-flex align-items-center justify-content-end perfil-usuario">
            <div class="text-end">
                <p class="py-0 my-0">Jefferson Souza</p>
                <p class="navbar-text py-0 my-0">Administrador</p>
            </div>
            <div class="dropdown">
                <img src="<?=__SYSTEM_ROOT_URL__?>/public/imagens/avatar-perfil.png" class="rounded-circle ms-4 dropdown-toggle"
                     data-bs-toggle="dropdown" aria-expanded="false" width="45" height="45" alt="Imagem Perfil Usuário">
                <ul class="dropdown-menu dropdown-menu-end mt-4">
                    <li>
                        <a class="dropdown-item" href="<?=__SYSTEM_ADMIN_URL__?>/usuario">
                            <i class="bi-person mx-2"></i>
                            Perfil do Usuário
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="<?=__SYSTEM_ADMIN_URL__?>/alterar-senha">
                            <i class="bi-lock mx-2"></i>
                            Alterar Senha
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="<?=__SYSTEM_ADMIN_URL__?>/cadastrar-usuario">
                            <i class="bi-person-plus mx-2"></i>
                            Cadastrar Usuário
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="<?=__SYSTEM_ADMIN_URL__?>/logout">
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMobileContent" aria-controls="navbarMobileContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<div class="collapse navbar-collapse bg-white rounded shadow-sm d-lg-none mt-3" id="navbarMobileContent">
    <div class="container-fluid p-3">
        <p class="text-uppercase text-body-secondary">menu</p>
        <ul class="navbar-nav flex-column list-group mb-3">
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

        <p class="text-uppercase text-body-secondary">configurações</p>
        <ul class="navbar-nav flex-column list-group mb-3">
            <li class="nav-item list-group-item border border-0 p-0 mb-2 ms-lg-2 ms-xl-3">
                <a class="nav-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <i class="bi-person fs-5 me-2 me-xl-3"></i>
                    Perfil
                    <i class="bi-arrow-down-short" id="toggleIconUser"></i>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="navbar-nav flex-column list-group">
                        <li>
                            <a class="dropdown-item" href="<?=__SYSTEM_ADMIN_URL__?>/usuario">
                                <i class="bi-arrow-return-right mx-2"></i>
                                Dados da Conta
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?=__SYSTEM_ADMIN_URL__?>/alterar-senha">
                                <i class="bi-arrow-return-right mx-2"></i>
                                Alterar Senha
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?=__SYSTEM_ADMIN_URL__?>/cadastrar-usuario">
                                <i class="bi-arrow-return-right mx-2"></i>
                                Cadastrar Usuário
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>

        <ul class="navbar-nav flex-column list-group">
            <li class="nav-item list-group-item border border-0 p-0 ms-lg-2 ms-xl-3">
                <a class="nav-link fw-medium" aria-current="page" href="">
                    <i class="bi-box-arrow-up-right fs-5 me-2 me-xl-3"></i>
                    Ver Blog
                </a>
            </li>
            <li class="nav-item list-group-item border border-0 p-0 ms-lg-2 ms-xl-3">
                <a class="nav-link" aria-current="page" href="<?=__SYSTEM_ADMIN_URL__?>/logout">
                    <i class="bi-box-arrow-right fs-5 me-2 me-xl-3"></i>
                    Sair
                </a>
            </li>
        </ul>
    </div>
</div>

<script>
	const toggleIconUser = document.querySelector('#toggleIconUser');
	const [arrowDown, arrowUp] = ['bi-arrow-down-short', 'bi-arrow-up-short'];

    function toggleIcon(event) {
	    event.target.classList.toggle(arrowDown);
	    event.target.classList.toggle(arrowUp);
    }

    toggleIconUser.addEventListener('click', (event) => toggleIcon(event));
</script>
