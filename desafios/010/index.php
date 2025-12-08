<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando sua idade </title>
    <link rel="stylesheet" href="/curso-php/desafios/style.css">
</head>
<body>
    <?php
        $anoNascimento = $_GET["anoNascimento"];
        $anoFuturo = $_GET["anoFuturo"];
        $anoAtual = date("Y");
        $idade = $anoAtual - $anoNascimento;
        $idadeFurtura = $anoFuturo - $anoNascimento;
    ?>
    <main>
        <h1> Calculando sua idade </h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>", method="get">
            <label for="anoNascimento"> Em que ano você nasceu? </label>
            <input type="number" name="anoNascimento" id="anoNascimento" value="<?=$anoNascimento?>" required>
            <label for=anoFuturo> Você quer saber sua idade em que ano? </label>
            <input type="number" name="anoFuturo" id="anoFuturo" value="<?=$anoFuturo?>" required>
            <input type="submit" value="Calcular idade">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <strong><?= $anoNascimento ?></strong> terá <strong><?= $idadeFurtura ?></strong> anos em <strong><?= $anoFuturo ?></strong></p>

    </section>
    
</body>
</html>