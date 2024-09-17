<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
</head>
<body>
   <div>
    <h2>Cadastro de usuário</h2>
    <form action="" method="post">
        <Label for="name"Nome</Label>
        <input type="text" name id="name" require>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" require>

        <label for="senha">Senha</label>
        <input type="Senha" name="senha" id="senha" require>

        <label for="perfil">Perfil:</label>
        <select name="perfil" id="perfil">
            <opton value="admin">Admin</opton>
            <opton value="gestor">Gestor</opton>
            <opton value="colaborador">Colaborador</opton>
        </select>
        <button type="submit">Cadastrar</button>


    </form>
    <a href="">Voltar ao login</a>

   </div> 

</body>
</html>