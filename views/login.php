<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link rel="stylesheet" href="css/estilo.css">
 
</head>
<body>
    <!-- O formulário usa o método POST para enviar dados de forma segura -->
    <main>
    <div class="container">
 
    <h2>Login</h2>
        <form method="post" action="index.php?action=login">
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="senha" placeholder="Senha" required><br>
            <button type="submit">Login</button>
        </form>
        <!-- Define o destino do link e leva à opção de cadastro -->
       <a href="index.php?action=register">Cadastrar-se</a></button>
       </div>
       
    </main>
</body>
 
</html>