<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor</title>
</head>
<body>
    <main>
        <h1>Money converter</h1>
            <?php 
            $cotacao = 5.22; 
            $money = (float) $_REQUEST["din"] ?? 0;
            $dolar =  $money / $cotacao;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY); 
            echo "Seus " . numfmt_format_currency($padrao, $money, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
            ?>
            <button onclick="javascript:history.go(-1)">Return</button>
    </main>
</body>
</html>