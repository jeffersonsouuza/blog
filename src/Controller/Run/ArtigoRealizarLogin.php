<?php

namespace Source\Controller\Run;

use mysqli;
use Source\Controller\InterfaceController;
use Source\Entity\Usuario;
use Source\Infra\DatabaseConnection;

class ArtigoRealizarLogin implements InterfaceController
{
     public function processaRequisicao(): void
    {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        if (is_null($email) || $email === false) {
            header('Location: /blog-php/index.php/login');
            return;
        }

        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
        if (is_null($senha) || $senha === false) {
            header('Location: /blog-php/index.php/login');
            return;
        }

        $_SESSION['logado'] = true;
        header('Location: /blog-php/index.php/painel-admin');
    }

    //TODO
    // chekar o login no banco de dados
}