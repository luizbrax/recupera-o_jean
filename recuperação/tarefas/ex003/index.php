<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>teste de tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal  0b = binario  0 = octal
        //$num = 0x1A;
        //echo "O valor da variável é $num";

        //$v = true;
        //var_dump($v);

        //$num = (int) 3e2; //3x10(2) coerção
        //echo "O valor é $num"; 
        //var_dump($num);

        //$num =(int) "9000";
        //var_dump($num);

        //$casado = false;
        //var_dump($casado);
        //print "o valor para casado é $casado";

        //$vet = [6, 2, 9, 3, 5];
        //var_dump($vet)

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>