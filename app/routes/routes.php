<?php

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
    '/novo-artigo' => NovoArtigo::class,
    '/salvar-artigo' => ArtigoAdicionar::class,
    '/admin/listar-artigos' => ListarArtigos::class,
    '/listar-artigos' => MostrarArtigos::class,
    '/artigo' => ExibirArtigo::class,
    '/editar-artigo' => EditarArtigo::class,
    '/salvar-edicao' => ArtigoEditar::class,
    '/excluir-artigo' => ExcluirArtigo::class,
    '/salvar-excluir' => ArtigoExcluir::class,
    "/login" => LoginArtigo::class,
    "/salvar-usuario" => UsuarioSalvar::class,
    "/realizar-login" => ArtigoRealizarLogin::class,
    "/logout" => ArtigoDeslogar::class,
];

return $rotas;