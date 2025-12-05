<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
    <link rel="stylesheet" href="/curso-php/desafios/style.css">


</head>
<body>
    <main>
        <h1> Conversor de moedas </h1>
        <?php 
            $cotação_dolar = 5.35;
            $valor_reais = $_GET["valor"];
            $valor_convertido = $valor_reais / $cotação_dolar;
            $valor_convertido = number_format($valor_convertido, 2, ",", ".");
            echo "<p> O valor de R$ $valor_reais convertido para Dólares é: <strong>US$ $valor_convertido</strong> </p>";
        
/*             Forma alternativa usando NumberFormatter, o bom é que esse padrão pt_BR pode ser convertido para outras moedas/paises com mais facilidade para edicção e formato correspondente.
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "<p> O valor de ". numfmt_format_currency($padrao, $valor_reais, "BRL") . " convertido para Dólares é: <strong>" . numfmt_format_currency($padrao, $valor_convertido, "USD") . "</strong> </p>"; */

            ?>
            <button onclick="javascript:history.go(-1)"> Voltar </button>

    </main>
</body>
</html>