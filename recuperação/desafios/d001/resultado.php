<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>sucessor e antecessor</title>
</head>

<body>
    <main>
        <h1>Resultado</h1>
        <p>
            <?php
                $numero_escolhido = $_REQUEST["num"] ?? 0;
                $anterior = (int) $numero_escolhido - 1;
                $sucessor = (int) $numero_escolhido + 1;
                echo "O número escolhido foi <strong>$numero_escolhido!</strong><br>";
                echo "O número <i>sucessor</i> é <strong>$sucessor!</strong><br>";
                echo "O número <i>anterior</i> é <strong>$anterior!</strong><br>";
            ?>
            <button onclick="javascript:history.go(-1)"> <-- Voltar </button>
        </p>
    </main>
</body>

</html>