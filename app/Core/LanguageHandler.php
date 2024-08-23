<?php
namespace app\Core;

class LanguageHandler {
    private string $defaultLanguage = 'br';
    private array $availableLanguages = ['br', 'eng'];

    public function __construct() {
        $this->setLanguage();
    }

    private function setLanguage() {
        if (isset($_GET['lang']) && in_array($_GET['lang'], $this->availableLanguages)) {
            // Salvar escolha na sessão
            $_SESSION['lang'] = $_GET['lang'];
            // Redirecionar para URL limpa sem o parâmetro 'lang'
            $this->redirectToCleanURL();
        }

        // Se não houver idioma definido, usar o padrão
        if (!isset($_SESSION['lang'])) {
            $_SESSION['lang'] = $this->defaultLanguage;
        }
    }

    private function redirectToCleanURL() {
        $url = strtok($_SERVER['REQUEST_URI'], '?'); // URL base sem parâmetros
        header("Location: $url");
        exit();
    }

    public function loadLanguageFile() {
        switch ($_SESSION['lang']) {
            case 'eng':
                require __PUBLIC_FOLDER__ . ('/lang/en.php');
                break;
            case 'br':
            default:
                require __PUBLIC_FOLDER__ . ('/lang/pt_BR.php');
                break;
        }
    }
}

$langHandler = new LanguageHandler();
$langHandler->loadLanguageFile();

