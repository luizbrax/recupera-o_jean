
<?php
$nome = $_REQUEST["name"] ?? "?";
$idade = $_REQUEST["idade"] ?? "?";
if ($idade >= 18) {
    print("<h1>$nome é maior de idade</h1>");
} else {
    print("<h1>$nome é menor de idade</h1>");
}
