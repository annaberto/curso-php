<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de tempo </title>
    <link rel="stylesheet" href="/curso-php/desafios/style.css">
</head>
<body>
    <main>
        <?php
            $totalDeSegundos = $_GET["totalDeSegundos"] ?? 0;
            $sobra = $totalDeSegundos;
            //semanas
            $semanas = intdiv($sobra, 604800);
            $sobra = $sobra % 604800;
            //dias
            $dias = intdiv($sobra, 86400);
            $sobra = $sobra % 86400;
            //horas
            $horas = intdiv($sobra, 3600);
            $sobra = $sobra % 3600;
            //minutos
            $minutos = intdiv($sobra, 60);
            $sobra = $sobra % 60;
            //segundos
            $segundos = $sobra;
        ?>

        <h1> Calculadora de tempo </h1>
        <form action="<?$_SERVER["PHP_SELF"] ?>", method="get">
            <label for="totalDeSegundos"> Informe o tempo em segundos:</label>
            <input type="number" name="totalDeSegundos" id="totalDeSegundos" step="1" required>
            <input type="submit" value="Calcular tempo"> 
        </form>
    </main>
    <?php 
    ?>
    <section>
        <h1>Totalizando tudo</h1>
        <p>O valor de <strong><?=number_format($totalDeSegundos, 0, ".", ".") ?></strong> segundos corresponde a:</p>
        <ul>
            <li><strong><?= $semanas ?></strong> semanas</li>
            <li><strong><?= $dias?></strong> dias</li>
            <li><strong><?= $horas ?></strong> horas</li>
            <li><strong><?= $minutos ?></strong> minutos</li>
            <li><strong><?= $segundos ?></strong> segundos</li>
        </ul>
    </section>
    
</body>
</html>



