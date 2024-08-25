<?php

namespace app\Entity\Usuarios\Action;

use app\Apps\InterfaceController;
use app\Core\DatabaseConnection;
use app\Entity\Usuarios\User;
use app\Helper\FlashMessageTrait;

class CreateUserAction implements InterfaceController
{
    use FlashMessageTrait;

    public function processaRequisicao(): void
    {
        global $lang;

        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

        $usuario = new User(DatabaseConnection::create());
        $usuarios = $usuario->exibirTodos();

        if ($email === "" || $senha === "") {
            $this->defineMensagem('danger', $lang['warning-invalid-email-password']);
        }

        $verificarUsuario = $this->verificarCadastro($email, $usuarios);

        if ($verificarUsuario) {
            $this->cadastrarUsuario($email, $senha);
        }

        header('Location: ' . __SYSTEM_ADMIN_URL__ . '/login');

    }

    public function verificarCadastro(string $email, array $usuarios): bool
    {
        global $lang;
        foreach ($usuarios as $user) {
            if ($user['email'] === $email) {
                $this->defineMensagem('danger', $lang['warning-invalid-register-user']);
                header('Location: ' . __SYSTEM_ADMIN_URL__ . '/login');
                return false;
            }
        }
        return true;
    }

    private function cadastrarUsuario(string $email, string $senha): void
    {
        global $lang;
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $email && $senha) {
            $usuario = new User(DatabaseConnection::create());
            $usuario->adicionar($email, md5($senha));
            $this->defineMensagem('success', $lang['warning-success-register-user']);
            header('Location: ' . __SYSTEM_ADMIN_URL__ . '/listar-artigos');
            exit();
        }
    }
}