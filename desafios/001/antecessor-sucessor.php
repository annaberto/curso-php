<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado antecessor e sucessor</title>
    <link rel="stylesheet" href="/curso-php/desafios/style.css">


</head>
<body>
    <header>
        <h1> Resultado antecessor e sucessor </h1>
    </header>

    <main>
        <?php
            $numero = $_GET["numero"];
            $antecessor = $numero -1;
            $sucessor = $numero +1;
            echo "O número escolhido foi <strong>$numero </strong>";
            echo "<br> O antecessor é <em> <strong> $antecessor </strong> </em>";
            echo "<br> O sucessor  é <em><strong> $sucessor </strong></em> ";
        ?>
        <button onclick="javascript:history.go(-1)"> Voltar </button>
    </main>
</body>
</html>