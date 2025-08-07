<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio 012</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        $segundos = $_GET["seg"] ?? 0;
        ?>
        <h2>Calculadora de Tempo</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="seg">Qual o total de segundos?</label>
            <input type="number" name="seg" id="seg" min="0" value="<?= $segundos ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <main>
        <h2>Totalizando tudo</h2>
        <?php
        $sobra = $segundos; //é sobra pq ainda n foi dividido
        $semanas = (int)($segundos / 604800); //pega apenas o resultado da divsao de forma inteira
        $sobra = $sobra % 604800; //pega a o numero escolhido e divide por 604800 e recebe o resto, pois a divisao n é real
        $dias = (int)($sobra / 86400); //pega a ultima sobra e divide de foram inteira por 86400
        $sobra = $sobra % 86400; //pega novamente a sobra mas dessa vez recebe apenas o resto da divisao 
        $horas = (int)($sobra / 3600);
        $sobra = $sobra % 3600;
        $minutos = (int)($sobra / 60);
        $sobra = $sobra % 60;
        $segundos = $sobra; //é oq sobrar, o resto de todas as divisões feitas ate chegar nele
        echo "Analizando o valor que você digitou, <strong>" . number_format($segundos, 0, ",", ".") . " segundos</strong> equivalem a um total de:";
        echo "<ul><li>" . number_format($semanas, 0, ",", ".") . " semanas";
        echo "<li>" . number_format($dias, 0, ",", ".") . " dias";
        echo "<li>" . number_format($horas, 0, ",", ".") . " horas";
        echo "<li>" . number_format($minutos, 0, ",", ".") . " minutos";
        echo "<li>" . number_format($segundos, 0, ",", ".") . " segundos";
        ?>
    </main>
</body>

</html>