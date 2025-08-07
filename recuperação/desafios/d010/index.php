<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio 010</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        $nascem = $_GET["nas"] ?? 0;
        $existem = $_GET["exi"] ?? 0;
        $atual = date("Y");
        ?>
        <h2>Calculando a sua idade</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="ano">Em que ano você nasceu?</label>
            <input type="number" name="nas" id="nasce" value="<?=$nascem?>" required max="<?=($atual-1)?>">
            <label for="ano2">Quer saber sua idade em que ano?(atualmente estamos em <?=$atual?>)</label>
            <input type="number" name="exi" id="existe" value="<?=$existem?>" required>
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <main>
        <h2>Resultado</h2>
        <?php
        $idade = $existem - $nascem;
        if($nascem > $existem){
            echo "Desculpe, mas você não era nascido!";
        } else {
            echo "Se você nasceu em <strong>$nascem</strong>, em <strong>$existem</strong> você vai ter <strong>$idade</strong>";
        } 

        
        
        ?>
    </main>
</body>

</html>