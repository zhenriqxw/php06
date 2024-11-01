<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificação de Login</title>
</head>
<body>
    <?php
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === 'admin' && $password === 'admin123') {
            echo "<h1>Login bem-sucedido!</h1>";
        } else {
            echo "<h1>Login falhou. Usuário ou senha incorretos.</h1>";
        }
    } else {
        echo "<h1>Por favor, preencha todos os campos.</h1>";
    }
    ?>
</body>
</html>