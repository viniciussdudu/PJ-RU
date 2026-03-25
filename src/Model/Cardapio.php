<?php
namespace App\Model;
//ll
class Cardapio {
    private $caminhoArquivo;

    public function __construct() {
        $this->caminhoArquivo = __DIR__ . '/../../data/cardapio.json';
    }

    public function obterRefeicoes() {
        $conteudo = file_get_contents($this->caminhoArquivo);
        return json_decode($conteudo, true);
    }

    public function atualizarRefeicao($dadosNovos) {
        $novoJson = json_encode($dadosNovos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        return file_put_contents($this->caminhoArquivo, $novoJson);
    }
}
