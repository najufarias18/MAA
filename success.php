<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sucesso</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="success-container">
        <h2>Login bem-sucedido, <?php echo $_SESSION["username"]; ?>!</h2>
        <a href="logout.php">Sair</a>
    </div>
</body>
</html>
