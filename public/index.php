<?php

require_once __DIR__ . '/../src/Model/cardapio.php';
require_once __DIR__ . '/../src/Controller/cardapioController.php';

use App\Controller\cardapioController;

$controller = new CardapioController();

$pagina = $GET['pagina'] ?? 'inicio';

if ($pagina === 'almoço') {
    $controller->exibiralmoço();
}
elseif ($pagina === 'janta') {
    $controller->exibirJanta();
}
else {
    $controller->exibirHome();
}