<?php

namespace app\Apps\AdminPanel\Controler;

use app\Apps\InterfaceController;
use app\Helper\FlashMessageTrait;

class ListarArtigos implements InterfaceController
{
    use FlashMessageTrait;

    public function processaRequisicao(): void
    {

        $title = 'Artigos';

        require __ADMIN_FOLDER__ . "/View/Artigo/listar-artigos.php";

    }
}