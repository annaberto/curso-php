<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias aritiméticas</title>
    <link rel="stylesheet" href="/curso-php/desafios/style.css">
</head>

<body>
    <?php
        $n1 = $_GET["nota1"] ?? 0;
        $n2 = $_GET["nota2"] ?? 0;
        $pesoN1 = $_GET["peso1"] ?? 1;
        $pesoN2 = $_GET["peso2"] ?? 1;
        $mediaAritimetica = ($n1 + $n2) / 2;
        $mediaPonderada= (($n1 * $pesoN1) + ($n2 * $pesoN2)) / ($pesoN1 + $pesoN2);
    ?>
    <main>
        <h1>Médias aritméticas</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="nota1"> Primeira nota:</label>
            <input type="number" name="nota1" id="nota1" step="0.01" required value="<?= $n1?>">
            <label for="peso1"> Peso da primeira nota:</label>
            <input type="number" name="peso1" id="peso1" required  value="<?= $pesoN1?>">
            <label for="nota2"> Segunda nota:</label>
            <input type="number" name="nota2" id="nota2" step="0.01" required  value="<?= $n1?>">
            <label for="peso2"> Peso da segunda nota:</label>
            <input type="number" name="peso2" id="peso2" required value="<?= $pesoN2?>">
            <input type="submit" value="Calcular médias">
        </form>
    </main>
    <section>
        <h2> Calcúlo das médias</h2>
        <p> Analisando os valores de <?= $n1?> e <?= $n2 ?>:</p>
        <ul>
            <li> A <strong>média aritmética simples é </strong> entre as notas é <?= number_format($mediaAritimetica, 2, ",", ".") ?></li>
            <li> A <strong>média ponderada </strong> entre as notas, considerando os pesos <?= $pesoN1 ?> e <?= $pesoN2 ?>, é <?= number_format($mediaPonderada, 2, ",", ".") ?></li>
    </section>

</body>

</html>