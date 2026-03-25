<?php
namespace App\Controller;
//
use App\Model\Cardapio;

class CardapioController {
    private $model;

    public function __construct() {
        $this->model = new Cardapio();
    }

     public function exibirHome() {
         $dados = $this->model->obterRefeicoes();
         $dataHoje = date('d/m/Y');
         $cardapio = $dados;
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

    public function exibirAtualizarCardapio() {
        $dados = $this->model->obterRefeicoes();
        $dataHoje = date('d/m/Y');
        include __DIR__ . '/../View/atualizarcardapio.php';
    }

    public function salvar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Pegamos o array estruturado que vem do formulário
            $dadosParaSalvar = [
                "almoco" => $_POST['almoco'],
                "janta"  => $_POST['janta']
            ];

            $sucesso = $this->model->atualizarRefeicao($dadosParaSalvar);

            if ($sucesso) {
                // Redireciona de volta para a página de atualizar com mensagem de sucesso
                header("Location: index.php?pagina=atualizarcardapio&sucesso=1");
                exit;
            } else {
                echo "Erro ao salvar os dados.";
            }
        }
    }

}
