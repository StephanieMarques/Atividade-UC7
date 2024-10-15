

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro/Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <!-- <div class="container">
        <div class="form-container" > -->
            <form action="acesso.php" id="login-form" method="post">
                <h2>Login</h2>
                <input type="email" placeholder="E-mail" name="email" required>
                <input type="password" placeholder="Senha" name="senha" required>
                <button type="submit">Entrar</button>
                <p>Não tem uma conta? <a href="#" id="toggle">Cadastre-se</a></p>
            </form>

            <form action="cardUsuario.php" id="signup-form" style="display: none;" method="post">
                <h2>Cadastro</h2>
                <input type="text" placeholder="Nome" name="nome" required>
                <input type="email" placeholder="E-mail" name="email"required>
                <input type="password" placeholder="Senha" name="senha"required>
                <button type="submit">Cadastrar</button>
                <p>Já tem uma conta? <a href="#" id="toggle-login">Login</a></p>
            </form>
        <!-- </div>
    </div> -->

   <script> 
    document.getElementById('toggle').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('login-form').style.display = 'none';
    document.getElementById('signup-form').style.display = 'block';
});

document.getElementById('toggle-login').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('signup-form').style.display = 'none';
    document.getElementById('login-form').style.display = 'block';
});
</script> 
</body>
</html>
