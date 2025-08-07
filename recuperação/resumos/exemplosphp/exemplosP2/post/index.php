<?php 
$nome = $_POST['texxt'] ?? "";
?>

<form action="index.php" method="post">
<label for="text">digite seu nome aqui</label>    
<input type="text" name="texxt" id="text">
</form>

<?php 
echo "Olá $nome"
?>