<?php
$nome = "luiz";

if (isset($nome)) {
    echo "<p>A variável 'nome' existe!";
} else {
    echo "<p>A variável 'nome' não existe!";
}


$idade = 0;

if (empty($idade)) {
    echo "<p>A variável 'idade' está vazia!";
} else {
    echo "A variável 'idade' tem valor!";
}
?>
