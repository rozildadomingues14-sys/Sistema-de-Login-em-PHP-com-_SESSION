
<?php
// perfil.php - Página exclusiva do administrador

session_start();

// Verifica se está logado
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header('Location: login.html');
    exit;
}

// Verifica se o usuário é admin
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] !== 'admin') {
    header('Location: painel.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Perfil do Administrador</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="container painel">
        <h2>Perfil do Administrador</h2>

        <p>Bem-vindo, admin!</p>
        <p>Esta página é exclusiva do administrador.</p>

        <p>
            <a href="painel.php">Voltar ao Painel</a>
        </p>

        <div class="logout">
            <a href="logout.php">Sair do sistema</a>
        </div>
    </div>
</body>
</html>
