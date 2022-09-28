<?php

namespace Source\Controller\Run;

use Source\Controller\InterfaceController;
use Source\Entity\Usuario;
use Source\Helper\FlashMessageTrait;
use Source\Infra\DatabaseConnection;

class ArtigoRealizarLogin implements InterfaceController
{

    use FlashMessageTrait;

     public function processaRequisicao(): void
    {

        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $usuario = new Usuario(DatabaseConnection::create());
        $usuarios = $usuario->exibirTodos();

        foreach ($usuarios as $user) {
            if ($user['email'] !== $email) {
                $this->defineMensagem('danger', 'E-mail inválido!');
                header('Location: /blog-php/index.php/login');
               return;
            }

            if ($user['senha'] !== $senha) {
                $this->defineMensagem('danger', 'Senha inválida!');
                header('Location: /blog-php/index.php/login');
                return;
            }
        }

        if (is_null($email) || $email === false) {
            $this->defineMensagem('danger', 'E-mail ou senha inválidos!');
            header('Location: /blog-php/index.php/login');
            return;
        }

        if (is_null($senha) || $senha === false) {
            $this->defineMensagem('danger', 'E-mail ou senha inválidos!');
            header('Location: /blog-php/index.php/login');
            return;
        }

        $this->defineMensagem('success', 'Usuário conectado!');

        $_SESSION['logado'] = true;

        header('Location: /blog-php/index.php/painel-admin');

    }

}