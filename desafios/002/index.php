<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerandor de números aleatórios</title>
    <link rel="stylesheet" href="/curso-php/desafios/style.css">

</head>
<body>
    <main>
        <h1> Gerador de números aleatórios </h1>
        <p> Gerando um número aleatório de 0 a 100 </p>
        <?php 
            $n1=0;
            $n2=100;
            $numero_aleatorio = mt_rand($n1, $n2);
            echo "<p> Número aleatório gerado: $numero_aleatorio </p>";
        ?>
        <button onclick="javascript:document.location.reload()"> Gerar numero </button>
    </main>
</body>
</html>
