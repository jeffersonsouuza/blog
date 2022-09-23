<?php

namespace Source\Controller\Run;

use Source\Controller\InterfaceController;
use Source\Entity\Usuario;
use Source\Helper\FlashMessageTrait;
use Source\Infra\DatabaseConnection;

class UsuarioSalvar implements InterfaceController
{
    use FlashMessageTrait;

    public function processaRequisicao(): void
    {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

        $usuario = new Usuario(DatabaseConnection::create());
        //$usuarios = $usuario->senhaEstaCorreta($senha);

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $email && $senha) {
            $usuario = new Usuario(DatabaseConnection::create());
            $usuario->adicionar($_POST['email'], md5($_POST['senha']));
            header('Location: /blog-php/index.php/painel-admin');

        } elseif ($email == "" || $senha == "") {
            header('Location: /blog-php/index.php/login');
        }

        //TODO
        // validar usuario duplicado
        // se o campo de entrada esta vazio e se é nulo
        // validar a seha
        // pesquisar validações de cadastro

    }
}