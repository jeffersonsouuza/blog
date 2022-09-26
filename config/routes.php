<?php

use Source\Controller\Run\{ArtigoAdicionar,
    ArtigoDeslogar,
    ArtigoRealizarLogin,
    ArtigoSalvarEdicao,
    ArtigoSalvarExcluir,
    UsuarioSalvar};
use Source\Controller\View\{ArtigoEditar,
    ArtigoExcluir,
    ArtigoFormularioNovo,
    ArtigoLogin,
    ArtigoPainelAdmin,
    ArtigoSelecionado,
    ArtigoListarDocumentos};

$rotas = [
    '/novo-artigo' => ArtigoFormularioNovo::class,
    '/salvar-artigo' => ArtigoAdicionar::class,
    '/painel-admin' => ArtigoPainelAdmin::class,
    '/listar-artigos' => ArtigoListarDocumentos::class,
    '/artigo-selecionado' => ArtigoSelecionado::class,
    '/editar-artigo' => ArtigoEditar::class,
    '/salvar-edicao' => ArtigoSalvarEdicao::class,
    '/excluir-artigo' => ArtigoExcluir::class,
    '/salvar-excluir' => ArtigoSalvarExcluir::class,
    "/login" => ArtigoLogin::class,
    "/salvar-usuario" => UsuarioSalvar::class,
    "/realizar-login" => ArtigoRealizarLogin::class,
   // "/logout" => ArtigoDeslogar::class,
];

return $rotas;