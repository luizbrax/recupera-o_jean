<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio 009</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h2>Médias Aritiméticas</h2>
        <?php 
        $valor1 = $_GET["vl1"] ?? '';
        $peso1 = $_GET["ps1"] ?? '';
        $valor2 = $_GET["vl2"] ?? '';
        $peso2 = $_GET["ps2"] ?? '';
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="vl1">1° Valor</label>
            <input type="number" name="vl1" id="vl1" value="<?=$valor1?>" required>
            <label for="ps1">1° Peso</label>
            <input type="number" name="ps1" id="ps1" value="<?=$peso1?>" required>
            <label for="vl2">2° Valor</label>
            <input type="number" name="vl2" id="vl2" value="<?=$valor2?>" required>
            <label for="ps2">2° Peso</label>
            <input type="number" name="ps2" id="ps2" value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <main>
        <h2>Cálculo das Médias</h2>
        <?php 
        $arit = ($valor1 + $valor2) / 2;
        $pond = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
        echo "<p><ul><li>A média aritimetica simples de <strong>$valor1</strong> e <strong>$valor2</strong> é <strong>$arit</strong>";

        echo "<p><li>A média ponderada de <strong>$valor1</strong>, <strong>$peso1</strong>, <strong>$valor2</strong>, <strong>$peso2</strong>  é <strong>$pond</strong>";
        ?>
    </main>
</body>
</html>