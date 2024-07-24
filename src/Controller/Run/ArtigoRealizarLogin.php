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

        if ($email && $senha) {
            $login = $this->login($email, $senha);
        } else {
            $this->defineMensagem('danger', 'Digite o e-mail ou senha corretamente.');
            header('Location: /blog-php/index.php/login');
            return;
        }

        if (!$login) {
            $this->defineMensagem('danger', 'E-mail ou Senha inválidos!');
            header('Location: /blog-php/index.php/login');
        }
    }

    public function login($email, $senha): bool
    {
        $usuario = new Usuario(DatabaseConnection::create());
        $usuariosLista = $usuario->exibirTodos();

        foreach ($usuariosLista as $user) {
            if ($user['email'] === $email && $user['senha'] === md5($senha)) {
                $this->defineMensagem('success', 'Usuário conectado!');
                $_SESSION['logado'] = true;
                header('Location: /blog-php/index.php/painel-admin');
                return true;
            }
        }

        return false;
    }

}