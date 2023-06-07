<?php

session_start();

require_once("../model/Produto.php");
require_once("../controller/Controlador.php");

$controlador = new Controlador();

//Login
if(!empty($_POST['inputEmailLog']) && !empty($_POST['inputSenhaLog'])){

    $_SESSION['estaLogado'] = TRUE;
    $email = $_POST['inputEmailLog'];
    $senha = $_POST['inputSenhaLog'];

    //echo "Email: " . $email . "Senha: " . $senha;
    header('Location:../view/home.php');
    die();
}

//Cadastro de Cliente
if(!empty($_POST['inputNome']) && !empty($_POST['inputSobrenome']) && 
   !empty($_POST['inputCPF']) && !empty($_POST['inputDataNascimento']) && 
   !empty($_POST['inputTelefone']) && !empty($_POST['inputEmail']) &&
   !empty($_POST['inputSenha'])){

    $nome = $_POST['inputNome'];
    $sobrenome = $_POST['inputSobrenome'];
    $cpf = $_POST['inputCPF'];
    $dataNascimento = $_POST['inputDataNascimento'];
    $telefone = $_POST['inputTelefone'];
    $email = $_POST['inputEmail'];
    $senha = $_POST['inputSenha'];
    
    $controlador->cadastrarCliente( $cpf,$nome, $sobrenome, $dataNascimento, $telefone, $email, $senha);

    header('Location:../view/cadastroCliente.php');
    die();
}

//Cadastro de Funcionário
if(!empty($_POST['inputNomeFunc']) && !empty($_POST['inputSobrenomeFunc']) && 
   !empty($_POST['inputCPFFunc']) && !empty($_POST['inputDataNascFunc']) && 
   !empty($_POST['inputTelefoneFunc']) && !empty($_POST['inputEmailFunc']) &&
   !empty($_POST['inputSalarioFunc'])){

    $nome = $_POST['inputNomeFunc'];
    $sobrenome = $_POST['inputSobrenomeFunc'];
    $cpf = $_POST['inputCPFFunc'];
    $dataNasc = $_POST['inputDataNascFunc'];
    $telefone = $_POST['inputTelefoneFunc'];
    $email = $_POST['inputEmailFunc'];
    $salario = $_POST['inputSalarioFunc'];
    
    $controlador->cadastrarFuncionario( $nome, $sobrenome,$cpf, $dataNasc, $telefone, $email, $salario);

    header('Location:../view/cadastroFuncionario.php');
    die();
}

//Cadastro de Produto
if(!empty($_POST['inputNomeProd']) && !empty($_POST['inputFabricanteProd']) && 
   !empty($_POST['inputDescricaoProd']) && !empty($_POST['inputValorProd'])){

    $nome = $_POST['inputNomeProd'];
    $fabricante = $_POST['inputFabricanteProd'];
    $descricao = $_POST['inputDescricaoProd'];
    $valor = $_POST['inputValorProd'];
    
    $controlador->cadastrarProduto($nome,$fabricante,$descricao,$valor);

    header('Location:../view/cadastroProduto.php');
    die();
}

?>