<?php

require_once __DIR__ . '/../src/Model/Cardapio.php';
require_once __DIR__ . '/../src/Controller/cardapioController.php';

use App\Controller\cardapioController;

$controller = new CardapioController();

$pagina = $_GET['pagina'] ?? $_POST['pagina'] ?? 'inicio';

if ($pagina === 'almoço') {
    $controller->exibiralmoço();
}
elseif ($pagina === 'janta') {
    $controller->exibirJanta();
}
elseif ($pagina === 'atualizarcardapio') {
    $controller->exibirAtualizarCardapio();
}
elseif ($pagina === 'salvar') {
    $controller->salvar();
}
else {
    $dataHoje = date('d/m/Y');
    $dados = new \App\Model\Cardapio();
    $cardapio = $dados->obterRefeicoes();
    $controller->exibirHome();
}