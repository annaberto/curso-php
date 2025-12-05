<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de raízes</title>
    <link rel="stylesheet" href="/curso-php/desafios/style.css">
</head>
<body>
    <?php
        $numero = $_GET["numero"] ?? 0;
        $raizQuadrada = sqrt($numero);
        $raizCubica = pow($numero, 1/3);
    ?>
    
    <main>
        <h1>Calculadora de raízes</h1>
        <form action="<?= $_SERVER["PHP_SELF"]?>", method="get">
            <label for="numero">Insira um número</label>
            <input type="number" name="numero" id="numero" step="0.01" required>
            <input type="submit" value="Calcular raízes">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>A raiz quadrada de <strong><?= $numero ?></strong> é <strong><?= number_format($raizQuadrada, 2, ",", ".") ?></strong></p>
        <p>A raiz cúbica de <strong><?= $numero ?></strong> é <strong><?= number_format($raizCubica, 2, ",", ".") ?></strong></p>
    </section>
    
</body>
</html>