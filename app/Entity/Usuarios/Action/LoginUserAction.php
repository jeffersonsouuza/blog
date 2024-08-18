<?php

namespace app\Entity\Usuarios\Action;

use app\Apps\InterfaceController;
use app\Core\DatabaseConnection;
use app\Entity\Usuarios\User;
use app\Helper\FlashMessageTrait;

class LoginUserAction implements InterfaceController
{

    use FlashMessageTrait;

     public function processaRequisicao(): void
    {

        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $redirecionarLogin = 'Location: ' . __SYSTEM_ADMIN_URL__ . '/login';

        if ($email && $senha) {
            $login = $this->login($email, $senha);
        } else {
            $this->defineMensagem('danger', 'Digite o e-mail ou senha corretamente.');
            header($redirecionarLogin);
            return;
        }

        if (!$login) {
            $this->defineMensagem('danger', 'E-mail ou Senha inválidos!');
            header($redirecionarLogin);
        }
    }

    public function login($email, $senha): bool
    {
        $usuario = new User(DatabaseConnection::create());
        $usuariosLista = $usuario->exibirTodos();

        foreach ($usuariosLista as $user) {
            if ($user['email'] === $email && $user['senha'] === md5($senha)) {
                $this->defineMensagem('success', 'Usuário conectado!');
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $user['id'];
                $_SESSION['email_usuario'] = $user['email'];
                header('Location: ' . __SYSTEM_ADMIN_URL__ . '/dashboard');
                return true;
            }
        }

        return false;
    }

}