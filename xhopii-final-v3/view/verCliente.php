<?php
    require "../processamento/funcoesBD.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="icon" href="../img/logo.png" type="image/png">
    <title>Xhopii - Ver Clientes</title>
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

    <section class="conteudo-visualizar">
        <section class="conteudo-visualizar-box">
            <h1>Clientes</h1>
            <?php
                $listaClientes = retornarClientes();
                while($cliente = mysqli_fetch_assoc($listaClientes)){
                    echo "<section class=\"conteudo-bloco\">";
                    echo "<h2>" . $cliente["nome"] . " " . $cliente["sobrenome"] . "</h2>";
                    echo "<p>CPF: " . $cliente["cpf"] . "</p>";
                    echo "<p>Data Nascimento: " . $cliente["dataNascimento"] . "</p>";
                    echo "<p>Telefone: " . $cliente["telefone"] . "</p>";
                    echo "<p>E-mail: " . $cliente["email"] . "</p>";
                    echo "</section>";
                }
            ?>
        </section>
    </section>

    <footer class="rodape-login">
        <img src="../img/footer-login.png">
        <hr>
        <p>© 2022 Xhopii. Todos os direitos reservados</p>
    </footer>
</body>
</html>