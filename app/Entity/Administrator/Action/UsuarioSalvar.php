<?php

namespace app\Entity\Administrator\Action;

use app\Apps\InterfaceController;
use app\Core\Infra\DatabaseConnection;
use app\Entity\Administrator\Usuario;
use app\Helper\FlashMessageTrait;

class UsuarioSalvar implements InterfaceController
{
    use FlashMessageTrait;

    public function processaRequisicao(): void
    {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

        $usuario = new Usuario(DatabaseConnection::create());
        $usuarios = $usuario->exibirTodos();

        if ($email === "" || $senha === "") {
            $this->defineMensagem('danger', 'E-mail ou senha inválidos');
        }

        $verificarUsuario = $this->verificarCadastro($email, $usuarios);

        if ($verificarUsuario) {
            $this->cadastrarUsuario($email, $senha);
        }

        header('Location: ' . __SYSTEM_ADMIN_URL__ . '/login');

    }

    public function verificarCadastro(string $email, array $usuarios): bool
    {
        foreach ($usuarios as $user) {
            if ($user['email'] === $email) {
                $this->defineMensagem('danger', 'Usuário ja cadastrado');
                header('Location: ' . __SYSTEM_ADMIN_URL__ . '/login');
                return false;
            }
        }
        return true;
    }

    private function cadastrarUsuario(string $email, string $senha): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $email && $senha) {
            $usuario = new Usuario(DatabaseConnection::create());
            $usuario->adicionar($email, md5($senha));
            $this->defineMensagem('success', 'Usuário Cadastrado!');
            header('Location: ' . __SYSTEM_ADMIN_URL__ . '/listar-artigos');
            exit();
        }
    }
}