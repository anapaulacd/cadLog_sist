<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="css/edit.css">

</head>
<style>
/* Reset básico */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Estilo do corpo */
body {
    font-family: 'Arial', sans-serif;
    background: radial-gradient(circle, rgba(140, 216, 222, 1) 0%, rgba(20, 41, 193, 1) 100%);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    color: #333;
    text-align: center;
    padding: 20px;
}

/* Container principal */
.edit-container {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2);
    width: 100%;
    max-width: 500px;
}

/* Título */
h2 {
    color: #1429c1;
    margin-bottom: 20px;
    font-size: 26px;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 2px;
}

/* Formulário */
form {
    width: 100%;
}

/* Campos de input */
input[type="text"],
input[type="email"],
select {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    transition: border-color 0.3s, box-shadow 0.3s;
}

/* Efeito de foco nos inputs */
input[type="text"]:focus,
input[type="email"]:focus,
select:focus {
    border-color: #1429c1;
    box-shadow: 0 0 8px rgba(20, 41, 193, 0.3);
    outline: none;
}

/* Estilo dos labels */
label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #1429c1;
    text-align: left;
}

/* Botão de salvar */
.btn {
    display: inline-block;
    width: 100%;
    padding: 12px;
    background-color: #1429c1;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
}

/* Efeito ao passar o mouse no botão */
.btn:hover {
    background-color: #0e1b91;
    transform: scale(1.05);
}

/* Link de voltar */
.back-link {
    display: block;
    margin-top: 20px;
    color: #1429c1;
    text-decoration: none;
    font-weight: bold;
}

/* Efeito ao passar o mouse no link de voltar */
.back-link:hover {
    text-decoration: underline;
    color: #0e1b91;
}

/* Responsividade para telas menores */
@media (max-width: 400px) {
    .edit-container {
        padding: 20px;
    }

    h2 {
        font-size: 22px;
    }

    .btn {
        padding: 15px;
        font-size: 14px;
    }

    input[type="text"],
    input[type="email"],
    select {
        font-size: 14px;
    }
}

</style>
<body class="edit-body">
    <div class="edit-container">
        <h2>Editar Usuário</h2>
        <form method="post" action="index.php?action=edit&id=<?= $user['id'] ?>" class="edit-form">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value=" <?= $user['nome'] ?>" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?= $user['email'] ?>" required><br>

            <label for="perfil">Perfil:</label>
            <select name="perfil" id="perfil">
                <option value="admin" <?= $user['perfil'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                <option value="gestor" <?= $user['perfil'] == 'gestor' ? 'selected' : '' ?>>Gestor</option>
                <option value="colaborador" <?= $user['perfil'] == 'colaborador' ? 'selected' : '' ?>>Colaborador</option>
            </select>

            <button type="submit" class="btn">Salvar</button>
        </form>
        <a href="index.php?action=list" class="back-link">Voltar para Lista de Usuários</a>
    </div>
</body>

</html>