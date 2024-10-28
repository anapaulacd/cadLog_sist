<?php
//Verifica se tem um perfil detectado se tiver inicia o html
session_start();
 
if(isset($_SESSION['perfil'])):
 
?>
<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" type='text/css' media='screen' href="css/list.css"> <!-- Link para o arquivo CSS -->
    <style>
/* Estilo geral */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background: radial-gradient(circle, rgba(140, 216, 222, 1) 0%, rgba(20, 41, 193, 1) 100%);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    text-align: center;
}

/* Estilo do container principal */
.container {
    background-color: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 600px;
}

/* Título da página */
h2 {
    color: #1429c1;
    margin-bottom: 20px;
    font-size: 24px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

/* Estilo da tabela */
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    font-size: 16px;
}

th, td {
    padding: 12px;
    text-align: left;
}

th {
    background-color: #1429c1;
    color: white;
    text-transform: uppercase;
}

td {
    background-color: #f3f3f3;
    border-bottom: 1px solid #ddd;
}

tr:hover {
    background-color: #e0e0e0;
}

.styled-table thead tr {
    background-color: #1429c1;
    color: white;
    text-align: left;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #1429c1;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #1429c1;
}

/* Links para ações (Editar, Excluir) */
a {
    color: #1429c1;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
    color: #0e1b91;
}

/* Botão de voltar */
.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #1429c1;
    color: white;
    border-radius: 5px;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 14px;
}

.btn:hover {
    background-color: #0e1b91;
}

</style>
</head>
 
<body class="<? $_SESSION['perfil'] ?>"> <!-- Define a classe com base no perfil do usuário -->
    <div class="container">
        <h2>Lista de Usuários</h2>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Perfil</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
 
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['nome'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['perfil'] ?></td>
                        <td>
                            <?php if ($_SESSION['perfil'] == 'admin' || $_SESSION['perfil'] == 'gestor') : ?>
                                <a href="">Editar</a>
                            <?php endif; ?>
                            <a href="index.php?edit&id=<?= $user['id']?>">Editar</a>
 
                            <!-- insere botao de exclusao apenas para perfil admin -->
                            <?php if ($_SESSION['perfil'] == 'admin') : ?>
                                <a href="">Excluir</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
 
        <a href="index.php?action=dashboard" class="btn">Voltar ao Dashboard</a>
    </div>
</body>
 
</html>
<?php else: ?>
    <p>Erro: Você não tem permissão para vizualizar essa página</p>
    <?php endif; ?>
 