<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadra de salário mínimo</title>
    <link rel="stylesheet" href="/curso-php/desafios/style.css">
</head>

<body>
    <?php
    $salario = $_GET["salario"] ?? 0;
    $salarioMinimo = 1_518.00;
    $quantidadeSalariosMinimos = $salario / $salarioMinimo;
    $restoSalario = $salario % $salarioMinimo;
    ?>
    <main>
        <h1>Calculadora de salário mínimo</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" , method="get">
            <label for="salario"> Informe o salário(R$)</label>
            <input type="number" name="salario" id="salario" step="0.01" required>
            <p>Considerando o salário mínimo de R$ <?= number_format($salarioMinimo, 2, ",", ".") ?></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado do cálculo</h2>
        <p>
            Quem recebe um salário de de <strong>R$<?= $salario ?> </strong> ganha <strong>
                <?= number_format($quantidadeSalariosMinimos, 2, ",", ".") ?> salários mínimos + R$<?= number_format($restoSalario, 2, ",", ".") ?></strong>
        </p>
    </section>
</body>

</html>