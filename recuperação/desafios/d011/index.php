<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio 011</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
        $valor = $_REQUEST["preco"] ?? 0;
        $porcentagem = $_REQUEST["porcent"] ?? 0;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        ?>
        <h2>Reajustador de Preços!</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="text">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" value="<?=$valor?>" placeholder="R$" min="0.10" step="0.01">
            <label for="porcent" >Qual será o valor do reajuste? (<span id="p">?</span>%)</label>
            <input type="range" name="porcent" id="porcent" min="0" max="100" step="1" value="<?=$porcentagem?>" oninput="mudaValor()">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <main>
        <h2>Resultado do Reajuste:</h2>
        <?php 
        $reajuste = ($valor * $porcentagem) / 100;
        $diferenca = $valor + $reajuste;
        echo "O produto de " . numfmt_format_currency($padrao, $valor, "BRL") . ", com <strong>". $porcentagem ."% de aumento</strong>, vai passar a custar <strong>". numfmt_format_currency($padrao, $diferenca, "BRL") ."</strong> a partir de agr";
        ?>
    </main>
    <script>
        mudaValor()

        function mudaValor(){
            p.innerText = porcent.value
        }
    </script>
</body>
</html>