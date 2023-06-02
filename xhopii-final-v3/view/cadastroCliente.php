<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="icon" href="../img/logo.png" type="image/png">
    <title>Xhopii - Cadastro Cliente</title>
</head>
<body>

    <header>
        <section id="cabecalho-logo">
            <img src="../img/logo.png">
            <h1>Xhopii</h1>
        </section>
        <section id="cabecalho-logout">
            <a href="login.php">Sair</a>
        </section>
    </header>

    <nav class="menu-horizontal">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="cadastroCliente.php">Cadastro Cliente</a></li>
            <li><a href="cadastroFuncionario.php">Cadastro Funcionário</a></li>
            <li><a href="cadastroProduto.php">Cadastro Produto</a></li>
            <li><a href="verCliente.php">Ver Clientes</a></li>
            <li><a href="verFuncionario.php">Ver Funcionários</a></li>
            <li><a href="verProduto.php">Ver Produtos</a></li>
        </ul>
    </nav>

    <section class="conteudo-cadastro">
        <section class="conteudo-formulario-cadastro">
            <form method="POST" action="../processamento/processamento.php">
                <label>Cadastrar Cliente</label>
                <input type="text" placeholder="Nome" name="inputNome">
                <input type="text" placeholder="Sobrenome" name="inputSobrenome">
                <input type="text" placeholder="CPF" name="inputCPF">
                <input type="date" placeholder="Data Nascimento" name="inputDataNasc">
                <input type="text" placeholder="Telefone" name="inputTelefone">
                <input type="text" placeholder="Email" name="inputEmail">
                <input type="password" placeholder="Senha" name="inputSenha">
                <input id="botao" type="submit" value="Cadastrar">
            </form>
        </section>
    </section>

    <footer class="rodape-login">
        <img src="../img/footer-login.png">
        <hr>
        <p>© 2022 Xhopii. Todos os direitos reservados</p>
    </footer>
</body>
</html>