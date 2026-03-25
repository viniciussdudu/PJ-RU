<?php
require_once __DIR__ . '/../Model/cardapio.php'; 
use App\Model\Cardapio;

$model = new Cardapio();
$dados = $model->obterRefeicoes();
$dataHoje = date('d/m/Y');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador - Cardápio Diário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="center topo">
        <div class="logo">⚙️ GERENCIAR CARDÁPIO</div>
        <div class="menu">
            <a href="index.php">Início</a>
            <a href="index.php?pagina=atualizarcardapio">Administrador</a>
        </div>
    </div>
</header>

<section class="conteudo">
    <div class="center">
        <div class="app">

            <div class="app-header">
                <h1>⚙️ Editar Cardápio</h1>
                <p>Atualize as refeições do dia.</p>
                <span class="data"><?php echo $dataHoje; ?></span>
            </div>

            <?php if(isset($_GET['sucesso']) && $_GET['sucesso'] == '1'): ?>
                <div class="sucesso">
                    ✅ Cardápio atualizado com sucesso!
                </div>
            <?php endif; ?>

    <form action="index.php?pagina=salvar" method="POST">
        <div class="container-cardapio">
            
            <fieldset>
                <legend><h2>☀️ Almoço</h2></legend>
                <input type="hidden" name="almoco[titulo]" value="<?= $dados['almoco']['titulo'] ?? 'Cardápio de Almoço' ?>">

                <div class="campo-grupo">
                    <label>Prato Principal</label>
                    <input type="text" name="almoco[prato_principal]" value="<?= $dados['almoco']['prato_principal'] ?? '' ?>">
                </div>

                <div class="campo-grupo">
                    <label>Salada</label>
                    <input type="text" name="almoco[salada]" value="<?= $dados['almoco']['salada'] ?? '' ?>">
                </div>

                <div class="campo-grupo">
                    <label>Vegetariano</label>
                    <input type="text" name="almoco[vegetariano]" value="<?= $dados['almoco']['vegetariano'] ?? '' ?>">
                </div>

                <div class="campo-grupo">
                    <label>Guarnição</label>
                    <input type="text" name="almoco[guarnicao]" value="<?= $dados['almoco']['guarnicao'] ?? '' ?>">
                </div>

                <div class="campo-grupo">
                    <label>Complemento</label>
                    <input type="text" name="almoco[complemento]" value="<?= $dados['almoco']['complemento'] ?? '' ?>">
                </div>

                <div class="campo-grupo">
                    <label>Sobremesa</label>
                    <input type="text" name="almoco[sobremesa]" value="<?= $dados['almoco']['sobremesa'] ?? '' ?>">
                </div>

                <div class="campo-grupo">
                    <label>Suco</label>
                    <input type="text" name="almoco[suco]" value="<?= $dados['almoco']['suco'] ?? '' ?>">
                </div>
            </fieldset>

            <fieldset>
                <legend><h2>🌙 Jantar</h2></legend>
                <input type="hidden" name="janta[titulo]" value="<?= $dados['janta']['titulo'] ?? 'Cardápio de Jantar' ?>">

                <div class="campo-grupo">
                    <label>Prato Principal</label>
                    <input type="text" name="janta[prato_principal]" value="<?= $dados['janta']['prato_principal'] ?? '' ?>">
                </div>

                <div class="campo-grupo">
                    <label>Salada</label>
                    <input type="text" name="janta[salada]" value="<?= $dados['janta']['salada'] ?? '' ?>">
                </div>

                <div class="campo-grupo">
                    <label>Vegetariano</label>
                    <input type="text" name="janta[vegetariano]" value="<?= $dados['janta']['vegetariano'] ?? '' ?>">
                </div>

                <div class="campo-grupo">
                    <label>Guarnição</label>
                    <input type="text" name="janta[guarnicao]" value="<?= $dados['janta']['guarnicao'] ?? '' ?>">
                </div>

                <div class="campo-grupo">
                    <label>Complemento</label>
                    <input type="text" name="janta[complemento]" value="<?= $dados['janta']['complemento'] ?? '' ?>">
                </div>

                <div class="campo-grupo">
                    <label>Sobremesa</label>
                    <input type="text" name="janta[sobremesa]" value="<?= $dados['janta']['sobremesa'] ?? '' ?>">
                </div>

                <div class="campo-grupo">
                    <label>Suco</label>
                    <input type="text" name="janta[suco]" value="<?= $dados['janta']['suco'] ?? '' ?>">
                </div>
            </fieldset>
        </div>

        <div class="botao-container">
            <button type="submit" class="btn-salvar">💾 Salvar Cardápio</button>
        </div>
    </form>

</body>
</html>