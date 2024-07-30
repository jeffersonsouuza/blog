<?php

namespace app\Entity\Administrator\Action;

use app\Apps\InterfaceController;
use app\Core\Infra\DatabaseConnection;
use app\Entity\Administrator\Usuario;
use app\Helper\FlashMessageTrait;

class ArtigoRealizarLogin implements InterfaceController
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
        $usuario = new Usuario(DatabaseConnection::create());
        $usuariosLista = $usuario->exibirTodos();

        foreach ($usuariosLista as $user) {
            if ($user['email'] === $email && $user['senha'] === md5($senha)) {
                $this->defineMensagem('success', 'Usuário conectado!');
                $_SESSION['logado'] = true;
                header('Location: ' . __SYSTEM_ADMIN_URL__ . '/listar-artigos');
                return true;
            }
        }

        return false;
    }

}