<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php echo $refeicao['titulo']; ?></title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; padding: 20px; }
        .card { border: 1px solid #ccc; border-radius: 8px; padding: 20px; max-width: 400px; }
        h1 { color: #2c3e50; }
        strong { color: #e67e22; }
    </style>
</head>
<body>
    <div class="card">
        <h1><?php echo $refeicao['titulo']; ?></h1>
        <p><strong>Prato Principal:</strong> <?php echo $refeicao['prato_principal']; ?></p>
        <p><strong>Salada:</strong> <?php echo $refeicao['salada']; ?></p>
        <p><strong>Vegetariano:</strong> <?php echo $refeicao['vegetariano']; ?></p>
        <p><strong>Guarnição:</strong> <?php echo $refeicao['guarnicao']; ?></p>
        <p><strong>Complemento:</strong> <?php echo $refeicao['complemento']; ?></p>
        <p><strong>Sobremesa:</strong> <?php echo $refeicao['sobremesa']; ?></p>
        <p><strong>Suco:</strong> <?php echo $refeicao['suco']; ?></p>
        <br>
        <a href="index.php">Voltar ao Início</a>
    </div>
</body>
</html>