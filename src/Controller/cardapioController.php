<?php
namespace App\Controller;

use App\Model\Cardapio;

class CardapioController {
    private $model;

    public function __construct() {
        $this->model = new Cardapio();
    }

     public function exibirHome() {
         include __DIR__ . '/../View/home.php';
     }

    public function exibiralmoço() {
        $dados = $this->model->obterRefeicoes();
        $refeicao = $dados['almoco'];
        include __DIR__ . '/../View/cardapiodetalhes.php';
    }

    public function exibirJanta() {
        $dados = $this->model->obterRefeicoes();
        $refeicao = $dados['janta'];
        include __DIR__ . '/../View/cardapiodetalhes.php';
    }

}
