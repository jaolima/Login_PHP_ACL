<?php
session_start();

require 'init.php';
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <title>Sistema de Login Ultimate PHP</title>
</head>

<body>

    <h1>Sistema Ultimate php</h1>

<!--    Caso o usuário esteja logado mostraremos o nome dele e um link de logout-->
<!--        Se o usuário não estiver logado mostraremos um link de login-->

    <?php if (isLoggedIn()): ?>
        <p>Olá, <?php echo $_SESSION['user_name']; ?>. <a href="panel.php">Painel</a> | <a href="logout.php">Sair</a></p>
    <?php else: ?>
        <p>Olá, visitante. <a href="form-login.php">Login</a></p>
    <?php endif; ?>

</body>
</html>