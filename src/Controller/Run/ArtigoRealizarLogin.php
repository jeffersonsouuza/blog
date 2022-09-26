<?php

namespace Source\Controller\Run;

use Source\Controller\InterfaceController;
use Source\Entity\Usuario;
use Source\Infra\DatabaseConnection;

class ArtigoRealizarLogin implements InterfaceController
{
    private array $repositorio;

    public function __construct()
    {
        $banco = new Usuario(DatabaseConnection::create());
        $this->repositorio = $banco->exibirTodos();
    }

    public function processaRequisicao(): void
    {

        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        if (is_null($email) || $email == false) {
            echo "E-mail Inválido0";
            return;
        }


        $_SESSION['logado'] = true;
        header('Location: /blog-php/index.php/painel-admin');
    }

    //TODO
    // chekar o login no banco de dados
}