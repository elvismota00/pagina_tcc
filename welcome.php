<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="boxout">
        <div class="boxin">
            <h1>Bem-vindo, <?php echo $_SESSION['username']; ?>!</h1>
            <a href="logout.php" class="form-btn">Sair</a>
        </div>
    </div>
</body>
</html>