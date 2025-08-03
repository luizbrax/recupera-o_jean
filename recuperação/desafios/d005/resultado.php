<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analisador de número real</title>
</head>

<body>
    <main>
        <h1>Analisador de Número real</h1>
        <?php
            $num = (float) $_REQUEST["result"] ?? 0;
            echo "Anaisando o número escolhido " . number_format($num, 3, ",", ".") . " informado pelo usuário:<p>";
            $int = (int) $num;
            $decimal = $num - $int;
            echo "<ul><li>A parte inteira desse número é: <strong>" . number_format($int, 0, ",", ".") . "</strong></ul>";
            echo "<ul><li>A parte fracionada desse número é: <strong>" . number_format($decimal, 3, ",", ".") . "</strong></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>