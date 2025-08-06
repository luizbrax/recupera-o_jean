<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 008</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        $numero = $_GET["num"] ?? 0;
        ?>
        <h1>Informe um Número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="Numero">Número</label>
            <input type="number" name="num" id="num" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <main>
        <h2>Resultado Final</h2>
        <?php 
        echo "O número escolhido foi <strong>$numero</strong>, então:";
        $quadrado = sqrt($numero);
        $cubico = $numero ** (1/3);
        echo "<p><ul><li>Sua raiz quadrada é <strong>" . number_format($quadrado, 3, ",", ".") . "</strong>";
        echo "<p><li>Sua raiz cubica é <strong>" . number_format($cubico, 3, ",", ".") . "</strong>";
        ?>
    </main>
</body>
</html>