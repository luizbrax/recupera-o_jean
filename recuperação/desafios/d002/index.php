<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sortear números</title>
</head>

<body>
    <main>
        <h1>Gerador de números aleatórios</h1>
       
        <p>
           <?php 
               $random = mt_rand(0, 1000);
               echo " Ao clicar no botão, um número entre 0 e 1000 será gerado!";
               echo "<br>O numero gerado foi <strong>$random</strong>";
           ?>
        </p>
        <button onclick="javascript:document.location.reload()">Gerar novamente</button>
    </main>
</body>

</html>