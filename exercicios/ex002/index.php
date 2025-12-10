<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
        $nome = "Anna";
        $sobrenome = "Raphaela";

        echo "Bem vindo, $nome $sobrenome <br>";

        date_default_timezone_set("America/Sao_Paulo");
        echo "<br> Hoje é dia date " . date("D/M/Y");
        echo "<br> A hora atual é " . date("G: i: s T");
    ?>

</body>
</html>