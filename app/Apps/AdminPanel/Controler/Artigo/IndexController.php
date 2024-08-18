<?php

namespace app\Apps\AdminPanel\Controler\Artigo;

use app\Apps\InterfaceController;
use app\Helper\FlashMessageTrait;

class IndexController implements InterfaceController
{
    use FlashMessageTrait;

    public function processaRequisicao(): void
    {

        $title = 'Artigos';

        require __ADMIN_FOLDER__ . "/View/Artigo/index.php";

    }
}