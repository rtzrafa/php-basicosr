<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

<form action=""method='post'>
    <label for="nome">nome:</label>
    <input type="text" name="nome" required>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="telefone">nome:</label><
    <input type="text" name="telefone" required> <br>
    
    <!-- Botão de envio -->
    <button type="submit">Enviar</button>


</form>

<?php
// $_server variavel superglobal que guarda informações
// do servidor e o tipo de requisição feita
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe os valores dos inputs (No formulário)
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    // Exibe os valores na página
    echo "<h2> Dados recebidos: </h2>";
    echo "Nome: $nome <br>";
    echo "Email $email <br> ";
    echo "Telefone: $telefone <br>";
       
}
?>
</body>
</html>