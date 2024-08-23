<?php

use app\Apps\AdminPanel\Controler\Artigo\CreatController;
use app\Apps\AdminPanel\Controler\Artigo\EditController;
use app\Apps\AdminPanel\Controler\Artigo\IndexController;
use app\Apps\AdminPanel\Controler\Artigo\ShowController;
use app\Apps\AdminPanel\Controler\Auth\{LoginController};
use app\Apps\AdminPanel\Controler\Dashboard;

use app\Apps\HomePanel\Controller\Artigo\ShowController as ShowControllerWebsite;
use app\Apps\HomePanel\Controller\Artigo\IndexController as IndexControllerWebsite;

use app\Entity\Usuarios\Action\CreateUserAction;
use app\Entity\Usuarios\Action\LogoutUserAction;
use app\Entity\Usuarios\Action\LoginUserAction;

use app\Entity\Artigos\Action\{EditArticleAction};
use app\Entity\Artigos\Action\CreateArticleAction;
use app\Entity\Artigos\Action\DeleteArticleAction;

$rotas = [
    "/admin/login" => LoginController::class,
    "/admin/realizar-login" => LoginUserAction::class,
    "/admin/salvar-usuario" => CreateUserAction::class,
//    "/admin/cadastrar-usuario" => Create::class,
//    "/admin/alterar-senha" => Create::class,
    "/admin/logout" => LogoutUserAction::class,

    '/admin/dashboard' => Dashboard::class,
    '/admin' => Dashboard::class,
    '/' => Dashboard::class,
    '/admin/listar-artigos' => IndexController::class,
    '/admin/mostrar-artigo' => ShowController::class,
    '/admin/novo-artigo' => CreatController::class,
    '/admin/salvar-artigo' => CreateArticleAction::class,
    '/admin/editar-artigo' => EditController::class,
    '/admin/salvar-edicao' => EditArticleAction::class,
    '/admin/salvar-excluir' => DeleteArticleAction::class,

    '/listar-artigos' => IndexControllerWebsite::class,
    '/artigo' => ShowControllerWebsite::class,
];

return $rotas;