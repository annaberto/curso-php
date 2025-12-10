<!--  Esse exercicio trabalha com formulários retroalimentados em php, onde o proprio formulario envia dados para ele mesmo
 processar, sem a necessidade de um outro arquivo html como feito nos exercicios anteriores. -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> For</title>
    <link rel="stylesheet" href="/curso-php/desafios/style.css">
</head>

<body>
    <?php
        $nome = $_GET['nome'] ?? '';
        $sobrenome = $_GET['sobrenome'] ?? '';
    ?>

    <main>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="text">Digite um seu nome:</label>
            <input type="text" name="nome" id="nome" value="<?= $nome ?>" required>
            <label for="sobrenome">Digite seu sobrenome:</label>
            <input type="text" name="sobrenome" id="sobrenome" value="<?= $sobrenome ?>" required>
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section id="resultado">
        <h2> Seu nome completo é:</h2>
        <?php
        echo "$nome $sobrenome";
        ?>
    </section>
</body>


</html>