<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type='text/css' media='screen' href="">
    <style>
/* Corpo da pagina */
body {
    text-align: center;
    background: rgb(140, 216, 222);
    background: radial-gradient(circle, rgba(140, 216, 222, 1) 0%, rgba(20, 41, 193, 1) 100%);
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

main {
    width: 350px;
    padding: 30px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    text-align: center;
}
/* Fomulario da pagina */
form {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    width: 100%;
}

input{
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}
/* Botão */
button {
    width: 100%;
    padding: 10px;
    margin-top: 20px;
    background-color: #1429c1;
    color: white;
    border: none;
    border-radius: 5px;
   
}



a {
    display: block;
    margin-top: 20px;
    color: #1429c1;
    text-decoration: none;
}


</style>
</head>
 
<body class="<? $_SESSION['perfil'] ?>"> <!-- Define a classe com base no perfil -->
    <div class="container">
        <h1>Bem-vindo, <? $_SESSION['perfil'] ?>!</h1>
        <p>Esta é a visão do perfil <? $_SESSION['perfil'] ?>.</p>
 
        <?php if($_SESSION['perfil'] == 'admin'): ?>
            <!-- Admin pode gerenciar usuários (editar e excluir) -->
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Admin)</a>
 
            <?php elseif($_SESSION['perfil'] == 'gestor'): ?>
            <!-- Gestor pode gerenciar usuários (apenas editar) -->
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Gestor)</a>
            <p>Área exclusiva do Gestor.</p>
 
            <?php else: ?>
            <p>Área exclusiva do Colaborador.</p>
            <?php endif; ?>
 
        <br><br><br><br>
        <!-- Gestor pode gerenciar usuários (apenas editar) -->
        <a href="index.php?action=logout" class="btn">Logout</a>
    </div>
</body>
 
</html>
 