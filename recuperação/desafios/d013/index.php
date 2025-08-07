<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio 013</title>
    <link rel="stylesheet" href="style.css">
    <style>
            img {
                height: 100px !important;
            }
        </style>
</head>

<body>
    <?php
    $valor = $_GET["valor"] ?? 0;
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <h2>Caixa Eletrônico</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor">Qual valor você deseja sacar?(R$)</label>
            <input type="number" name="valor" id="valor" value="<?= $valor ?>" step="5">
            <h6>Notas disponiveis: R$100, R$50, R$10 e R$5</h6>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <main>
        
        <h2>Saque de <?= numfmt_format_currency($padrao, $valor, "BRL") ?> realizado!</h2>
        O caixa eletronico vai te entregar as seguintes notas:
        <?php
        $sobra = $valor;
        $cem = (int)($valor / 100);
        $sobra = $sobra % 100;
        $cinquenta = (int)($sobra / 50);
        $sobra = $sobra % 50;
        $dez = (int)($sobra / 10);
        $sobra = $sobra % 10;
        $cinco = (int)($sobra / 5);
        $sobra = $sobra % 5;

        ?>
        <ul>
            <li><img src="../img/100-reais.jpg" alt="100reais"> <?= $cem ?>x</li>
            <li><img src="../img/50-reais.jpg" alt="50reais"> <?= $cinquenta ?>x</li>
            <li><img src="../img/10-reais.jpg" alt="10reais"> <?= $dez ?>x</li>
            <li><img src="../img/5-reais.jpg" alt="5reais"> <?= $cinco ?>x</li>
        </ul>
    </main>

</body>

</html>