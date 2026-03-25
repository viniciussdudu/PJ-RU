<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio Diário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="center topo">
        <div class="logo">🍽️ Cardápio Diário</div>

        <nav class="menu">
            <a href="index.php?pagina=inicio">Início</a>
            <a href="#cardapio">Cardápio</a>
            <a href="index.php?pagina=atualizarcardapio">Administrador</a>
        </nav>
    </div>
</header>

<section class="hero">
    <div class="center hero-content">
        <div class="hero-text">
            <span class="tag">Restaurante Universitário</span>
            <h1>Bem-vindo ao Cardápio Diário</h1>
            <p>
                Consulte de forma rápida e bonita as refeições disponíveis no dia.
                Acompanhe o almoço e a janta atualizados em um só lugar.
            </p>

            <div class="hero-botoes">
                <a href="#cardapio" class="btn">Ver cardápio</a>
                <a href="index.php?pagina=atualizarcardapio" class="btn btn-secundario">Área do administrador</a>
            </div>
        </div>

        <div class="hero-box">
            <h2>📅 Hoje</h2>
            <p class="data-destaque"><?php echo $dataHoje; ?></p>
            <p>Confira abaixo as refeições disponíveis para hoje.</p>
        </div>
    </div>
</section>

<section class="conteudo" id="cardapio">
    <div class="center">
        <div class="app">

            <div class="app-header">
                <h1>🍴 Refeições do Dia</h1>
                <p>Confira o cardápio de hoje para almoço e janta.</p>
                <span class="data"><?php echo $dataHoje; ?></span>
            </div>

            <h3 class="secao-titulo">Cardápio atualizado</h3>

            <div class="filtros">
                <button type="button" class="filtro-btn ativo" onclick="mostrar('almoco')">☀️ Almoço</button>
                <button type="button" class="filtro-btn" onclick="mostrar('janta')">🌙 Janta</button>
            </div>

            <div class="cardapio">
                <div class="box" id="almoco-box">
                    <h2>☀️ Almoço</h2>
                    <?php if (is_array($cardapio['almoco'])): ?>
                        <p><strong>Prato Principal:</strong> <?php echo $cardapio["almoco"]["prato_principal"] ?? 'N/A'; ?></p>
                        <p><strong>Salada:</strong> <?php echo $cardapio["almoco"]["salada"] ?? 'N/A'; ?></p>
                        <p><strong>Vegetariano:</strong> <?php echo $cardapio["almoco"]["vegetariano"] ?? 'N/A'; ?></p>
                        <p><strong>Guarnição:</strong> <?php echo $cardapio["almoco"]["guarnicao"] ?? 'N/A'; ?></p>
                        <p><strong>Complemento:</strong> <?php echo $cardapio["almoco"]["complemento"] ?? 'N/A'; ?></p>
                        <p><strong>Sobremesa:</strong> <?php echo $cardapio["almoco"]["sobremesa"] ?? 'N/A'; ?></p>
                        <p><strong>Suco:</strong> <?php echo $cardapio["almoco"]["suco"] ?? 'N/A'; ?></p>
                    <?php else: ?>
                        <p><?php echo $cardapio["almoco"] ?? 'Cardápio não disponível'; ?></p>
                    <?php endif; ?>
                </div>

                <div class="box" id="janta-box" style="display: none;">
                    <h2>🌙 Janta</h2>
                    <?php if (is_array($cardapio['janta'])): ?>
                        <p><strong>Prato Principal:</strong> <?php echo $cardapio["janta"]["prato_principal"] ?? 'N/A'; ?></p>
                        <p><strong>Salada:</strong> <?php echo $cardapio["janta"]["salada"] ?? 'N/A'; ?></p>
                        <p><strong>Vegetariano:</strong> <?php echo $cardapio["janta"]["vegetariano"] ?? 'N/A'; ?></p>
                        <p><strong>Guarnição:</strong> <?php echo $cardapio["janta"]["guarnicao"] ?? 'N/A'; ?></p>
                        <p><strong>Complemento:</strong> <?php echo $cardapio["janta"]["complemento"] ?? 'N/A'; ?></p>
                        <p><strong>Sobremesa:</strong> <?php echo $cardapio["janta"]["sobremesa"] ?? 'N/A'; ?></p>
                        <p><strong>Suco:</strong> <?php echo $cardapio["janta"]["suco"] ?? 'N/A'; ?></p>
                    <?php else: ?>
                        <p><?php echo $cardapio["janta"] ?? 'Cardápio não disponível'; ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="rodape">
                Última visualização do cardápio do dia <?php echo $dataHoje; ?>
            </div>

        </div>
    </div>
</section>

<script>
function mostrar(tipo){
    const almoco = document.getElementById('almoco-box');
    const janta = document.getElementById('janta-box');
    const botoes = document.querySelectorAll('.filtro-btn');

    botoes.forEach(btn => btn.classList.remove('ativo'));

    if(tipo === 'almoco'){
        almoco.style.display = 'block';
        janta.style.display = 'none';
        botoes[0].classList.add('ativo');
    } else {
        almoco.style.display = 'none';
        janta.style.display = 'block';
        botoes[1].classList.add('ativo');
    }
}
</script>

</body>
</html>