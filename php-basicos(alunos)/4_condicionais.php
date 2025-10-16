<?php

   if($_SERVER['REQUEST_METHOD'] == 'post'){
    // Recebe a senha 
    $senha = $_POST['senha'];

    // Verifica se a senha é: 123
    if($senha == '123') {
        // ele sera desviado para apagina
        header("Location: 4b_bem_vindo.php");
        exit();
    } else {
        // se usuario digitar a senha incorreta
        // ele verá a mensagem de erro
        $erro = 'Senha incorreta. Tente novamente!';

    }
   }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina de login</title>
</head>
<body>
<h1>digite  senha para continuar</h1>
<form action=""method='post'>

    <label for="senha">nome:</label><
    <input type="passaword" name="senha" required> <br>
    
    <!-- Botão de entrada -->
    <button type="submit">Entrar</button>


</form>

<?php
if(isset($erro)) {
    echo"<p style='color: red';>$erro</p>";
}

