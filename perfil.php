
<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    header('Location: login.html');
    exit;
}

// Permite acesso somente ao admin
if ($_SESSION['usuario'] !== 'admin') {
    header('Location: painel.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Administrador</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <div class="container">
        <h2>Perfil do Administrador</h2>

        <p>Bem-vindo, admin!</p>
        <p>Esta página é exclusiva para administradores.</p>

        <a href="painel.php">Voltar ao Painel</a>

        <div class="logout">
            <a href="logout.php">Sair</a>
        </div>
    </div>

</body>
</html>
