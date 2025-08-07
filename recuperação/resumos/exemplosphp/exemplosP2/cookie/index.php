<?php 
//cria o cookie
setcookie("usuario", "Luiz", time() + 3600); //tempo defifinido em segundos
//executa ele
isset($_COOKIE['usuario']);
echo "bem vindo, " . $_COOKIE['usuario']
?>