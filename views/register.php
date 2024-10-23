<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
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
<body>
<div>
    <h2>Cadastro de usuário</h2>
    <form action="index.php?action=register" method="post">

        <label for="name">nome</label>
        <input type="text" name="nome" id="name" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" required>

        <label for="perfil">Perfil:</label>
        <select name="perfil" id="perfil">
            <option value = "admin">Admin</option>
            <option value = "gestor">gestor</option>
            <option value = "colaborador">colaborador</option>
          
            
        </select>
        <button type="submit">Cadastrar</button>


    </form>
    <a href="index.php?action=login">Voltar ao login</a>

   </div> 

</body>
</html>
<body>
   