<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="/curso-php/desafios/style.css">
    <style>
        .nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <main>
        <?php
            $valorSaque = $_GET["valorSaque"] ?? 0;
            $sobra = $valorSaque;

            //notas de 100, 50, 10, 5
            $nota100 = intdiv($valorSaque, 100);
            $sobra %= 100;
            $nota50 = intdiv($sobra, 50);
            $sobra %= 50;
            $nota10 = intdiv($sobra, 10);
            $sobra %= 10;
            $nota5 = intdiv($sobra, 5);
        ?>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="valorSaque">Qual valor você deseja sacar? (R$) <sup>*</sup></label>
            <input type="number" name="valorSaque" id="valorSaque" step="5" oninvalid="" required>

            <p style="font-size: 0.7em" > *As notas disponíveis são de R$5, R$10, R$50, R$100</p>
            <input type="submit" value="Sacar">

        </form>
           
    </main>
    <section>
        <h2>Resultado</h2>
        <p>Você solicitou o saque de R$<?= number_format( $valorSaque, 2, ",", ".") ?></strong></p>
        <p>Serão entregues as seguintes cédulas:</p>
            <ul>
                <li><img src="imagens/100-reais.jpg" alt="nota de 100" class="nota"> x <?= $nota100 ?></li>
                <li><img src="imagens/50-reais.jpg" alt="nota de 50" class="nota"> x <?= $nota50 ?> </li>
                <li><img src="imagens/10-reais.jpg" alt="nota de 10" class="nota"> x <?= $nota10 ?></li>
                <li><img src="imagens/5-reais.jpg" alt="nota de 5" class="nota"> x <?= $nota5 ?></li>
            </ul>
    </section>
</body>
</html>