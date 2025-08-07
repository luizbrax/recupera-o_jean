<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <main>
        <?php
        $salario = $_GET["sal"] ?? 0;
        $minimo = 1518;
        $resto = $salario % $minimo;
        $resultado = floor($salario / $minimo);
        ?>
        <h1>Informe seu Salário:</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="text">Salário (R$)</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>" min="0">
            <p>Considere o salário mínimo de <strong>R$1.518,00</strong> </p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <main>
        <h2>Resultado Final</h2>
        <?php 
            echo "Quem recebe um salário de " .  number_format($salario, 2, ",", ".") . " ganha " . number_format($resultado, 0, ",", ".") . " salário(s) + " . number_format($resto, 2, ",", ".");
        ?>
    </main>
</body>

</html>