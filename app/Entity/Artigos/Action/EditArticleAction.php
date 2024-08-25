<?php

namespace app\Entity\Artigos\Action;

use app\Apps\InterfaceController;
use app\Core\DatabaseConnection;
use app\Entity\Artigos\Article;
use app\Helper\FlashMessageTrait;

class EditArticleAction implements InterfaceController
{
    use FlashMessageTrait;

    private array $lang;

    public function __construct()
    {
        global $lang;
        require_once 'app/Core/languageHandler.php';
        $this->lang = $lang;
    }

    public function processaRequisicao(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $artigo = new Article(DatabaseConnection::create());
            $artigo->editar($_POST['id'], $_POST['titulo'], $_POST['conteudo'], $_POST['status']);

            $this->defineMensagem('success', $this->lang['warning-success-login']);

            header('Location: ' . __SYSTEM_ADMIN_URL__ . '/listar-artigos');
        }
    }
}