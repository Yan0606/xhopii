<?php

require_once"../model/Cliente.php";
require_once"../model/Funcionario.php";
require_once"../model/Produto.php";

class Controlador{

    //Atributo
    private $bancoDeDados;

    function __construct(){
        $this->bancoDeDados = new BancoDeDados("localhost","root","","xhopii");
    }

    public function cadastrarProduto($nome, $fabricante, $descricao, $valor){

        $produto = new Produto($nome,$fabricante,$descricao,$valor);
        $this->bancoDeDados->inserirProduto($produto);
    }

    public function visualizarProdutos(){
        
        $listaProdutos = $this->bancoDeDados->retornarProdutos();
        while($produto = mysqli_fetch_assoc($listaProdutos)){
            return "<section class=\"conteudo-bloco\">" .
                   "<h2>" . $produto["nome"] . "</h2>" .
                   "<p>Fabricante: " . $produto["fabricante"] . "</p>" .
                   "<p>Descrição: " . $produto["descricao"] . "</p>" . 
                   "<p>Valor: " . $produto["valor"] . "</p>" .
                   "</section>";
        }
    }

    public function cadastrarCliente( $nome, $sobrenome,$cpf, $dataNasc, $telefone, $email, $senha){

        $cliente = new Cliente( $nome, $sobrenome,$cpf, $dataNasc, $telefone, $email, $senha);
        $this->bancoDeDados->inserirCliente($cliente);
    }


    public function visualizarClientes(){
        $listaClientes =  $this->bancoDeDados->retornarClientes();
        while($cliente = mysqli_fetch_assoc($listaClientes)){
            "<section class=\"conteudo-bloco\">".
             "<h2>" . $cliente["cpf"] . " " . $cliente["nome"] . "</h2>".
             "<p>CPF: " . $cliente["sobrenome"] . "</p>".
             "<p>Data Nascimento: " . $cliente["dataNasc"] . "</p>".
             "<p>Telefone: " . $cliente["telefone"] . "</p>".
             "<p>E-mail: " . $cliente["email"] . "</p>".
             "<p>Senha: " . $cliente["senha"] . "</p>".
             "</section>";
        }
    }

    public function cadastrarFuncionario( $nome, $sobrenome,$cpf, $dataNasc, $telefone, $email, $salario){

        $funcionario = new Funcionario( $nome, $sobrenome,$cpf, $dataNasc, $telefone, $email, $salario);
        $this->bancoDeDados->inserirFuncionario($funcionario);
    }

    public function visualizarFuncionarios(){
        $listaFuncionarios =  $this->bancoDeDados->retornarFuncionarios();
        while($funcionario = mysqli_fetch_assoc($listaFuncionarios)){
            "<section class=\"conteudo-bloco\">".
             "<h2>" . $funcionario["nome"] . " " . $funcionario["sobrenome"] . "</h2>".
             "<p>CPF: " . $funcionario["cpf"] . "</p>".
             "<p>Data Nascimento: " . $funcionario["dataNascimento"] . "</p>".
             "<p>Telefone: " . $funcionario["telefone"] . "</p>".
             "<p>E-mail: " . $funcionario["email"] . "</p>".
             "</section>";
        
        }
    }

}

?>