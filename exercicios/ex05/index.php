<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com Super globais </title>
    <link rel="stylesheet" href="/curso-php/desafios/style.css">
</head>

<body>
    <main>
        <pre>
        <h1>Trabalhando com Super globais </h1>
        <?php
        echo "<h2>Variável Super Global GET</h2>";
        var_dump($_GET);

        echo "<h2>Variável Super Global POST</h2>";
        var_dump($_POST);

        echo "<h2>Variável Super Global REQUEST </h2>";
        var_dump($_REQUEST);

        echo "<h2>Variável Super Global COOKIE </h2>";
        setcookie("dia-da-semana", "SEXTA-FEIRA", time() + 3600); /* Duração de 3600 segundos(1h) */
        var_dump($_COOKIE);

        echo "<h2>Variável Super Global SESSION </h2>";
        session_start();
        var_dump($_SESSION);

        echo "<h2>Variável Super Global ENV </h2>";
        var_dump($_ENV);

        echo "<h2>Variável Super Global SERVER </h2>";
        var_dump($_SERVER);

        echo "<h2>Variável Super Global  Globals</h2>";
        var_dump($GLOBALS);

        ?>
        </pre>
    </main>
</body>

</html>