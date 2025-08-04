<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Anatomia da divisao</title>
</head>

<body>
    <main>
        <?php
        $dividendo = $_REQUEST["divd"] ?? 0;
        $divisor = $_REQUEST["divs"] ?? 1;
        ?>
        <h1>Anatômia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="divd">Dividendo</label>
            <input type="number" name="divd" id="divd" value="<?= $dividendo ?>" min="0">
            <label for="divs">Divisor</label>
            <input type="number" name="divs" id="divs" value="<?= $divisor ?>" min="1">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <main>
        <h2>Estrutura da Divisão</h2>
        <?php
        $divisao = intdiv($dividendo, $divisor);
        $sobra = $dividendo%$divisor;
        print("<ul><li>O dividendo é: $dividendo");
        print("<li>O divisor é: $divisor");
        print("<li>O produto é: $divisao");
        print("<li>A sobra é: $sobra");
        ?>
    </main>
</body>

</html>