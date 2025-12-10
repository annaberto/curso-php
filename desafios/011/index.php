<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de preços</title>
    <link rel="stylesheet" href="/curso-php/desafios/style.css">
</head>
<body>
    <?php 
        $preco = $_GET["preco"] ?? 0;
        $reajuste = $_GET["reajuste"] ?? 0;
        $precoReajustado = $preco + ($preco * $reajuste / 100);
    ?>

    <main>
        <form action="<?$_SERVER["PHP_SELF"]?>" method="get"  >
            <h1>Reajustador de preços</h1>
            <label for="preco">Preço do produto (R$)</label>
            <input type="number" name="preco" id="preco" step="0.01" value="<?= $preco ?>" required>
            <label for="reajuste">Qual o percentual de reajuste? (<strong><span id="p">?</span>%</strong>) </label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" oninput="atualizarValorReajuste()" required>
            <input type="submit" value="Reajustar preço">
        </form>
    </main>

    <section>
        <h1>Resultado do reajuste</h1>
        <p>O produto que custava R$ <strong> <?=$preco?> </strong>, com o reajuste de <strong><?=$reajuste?>%</strong> de aumento vai passar a custar R$ <strong><?=$precoReajustado?></strong> a partir de agora.</p>
    </section>
    <script>
        atualizarValorReajuste();
        function atualizarValorReajuste(){
            p.innerText = reajuste.value;
        }
    </script>
</body>
</html>