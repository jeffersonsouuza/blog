<?php

use app\Apps\AdminPanel\Controler\Dashboard;
use app\Apps\AdminPanel\Controler\Auth\{LoginArtigo};
use app\Apps\AdminPanel\Controler\EditarArtigo;
use app\Apps\AdminPanel\Controler\ExcluirArtigo;
use app\Apps\AdminPanel\Controler\ListarArtigos;
use app\Apps\AdminPanel\Controler\NovoArtigo;
use app\Apps\HomePanel\Controller\ExibirArtigo;
use app\Apps\HomePanel\Controller\MostrarArtigos;
use app\Entity\Administrator\Action\ArtigoDeslogar;
use app\Entity\Administrator\Action\ArtigoRealizarLogin;
use app\Entity\Administrator\Action\UsuarioSalvar;
use app\Entity\Artigos\Action\{ArtigoEditar};
use app\Entity\Artigos\Action\ArtigoAdicionar;
use app\Entity\Artigos\Action\ArtigoExcluir;

$rotas = [
    "/admin/login" => LoginArtigo::class,
    "/admin/realizar-login" => ArtigoRealizarLogin::class,
    "/admin/salvar-usuario" => UsuarioSalvar::class,
    "/admin/cadastrar-usuario" => UsuarioSalvar::class,
    "/admin/alterar-senha" => UsuarioSalvar::class,
    "/admin/logout" => ArtigoDeslogar::class,

    '/admin/dashboard' => Dashboard::class,
    '/admin/listar-artigos' => ListarArtigos::class,
    '/admin/novo-artigo' => NovoArtigo::class,
    '/admin/salvar-artigo' => ArtigoAdicionar::class,
    '/admin/editar-artigo' => EditarArtigo::class,
    '/admin/salvar-edicao' => ArtigoEditar::class,
    '/admin/excluir-artigo' => ExcluirArtigo::class,
    '/admin/salvar-excluir' => ArtigoExcluir::class,

    '/listar-artigos' => MostrarArtigos::class,
    '/artigo' => ExibirArtigo::class,
];

return $rotas;