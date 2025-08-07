 <form method="post"> <!-- metodo escolhido -->
  <label>Email:</label>
  <input type="text" name="email"> <!--name é o formulario q vc vai querer pegar-->
  <input type="submit" value="Enviar">
</form>
<?php
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); //pegou o method, depois o nome do formlario e por vim fez a validação
if ($email) {
  echo "Email válido: $email";
} else {
  echo "Email inválido!";
}
?>