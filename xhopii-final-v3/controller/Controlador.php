<?php

require_once"../model/BancoDeDados.php";
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
        $dados = "";
        $listaProdutos = $this->bancoDeDados->retornarProdutos();
        while($produto = mysqli_fetch_assoc($listaProdutos)){
            $dados .="<section class=\"conteudo-bloco\">" .
                   "<h2>" . $produto["nome"] . "</h2>" .
                   "<p>Fabricante: " . $produto["fabricante"] . "</p>" .
                   "<p>Descrição: " . $produto["descricao"] . "</p>" . 
                   "<p>Valor: " . $produto["valor"] . "</p>" .
                   "</section>";
        }
        return $dados;
    }

    public function cadastrarCliente( $nome,$cpf, $sobrenome,$dataNascimento, $telefone, $email, $senha){

        $cliente = new Cliente($nome,$cpf,  $sobrenome, $dataNascimento, $telefone, $email, $senha);
        $this->bancoDeDados->inserirCliente($cliente);
    }


    public function visualizarClientes(){
        $dados = "";
        $listaClientes =  $this->bancoDeDados->retornarClientes();
         while($cliente = mysqli_fetch_assoc($listaClientes)){
            $dados.="<section class=\"conteudo-bloco\">".
             "<h2>" . $cliente["nome"] . " " . "</h2>" . 
             "<p>CPF: " . $cliente["cpf"] . "".
             "<p>Sobrenome: " . $cliente["sobrenome"] . "</p>".
             "<p>Data Nascimento: " . $cliente["dataNascimento"] . "</p>".
             "<p>Telefone: " . $cliente["telefone"] . "</p>".
             "<p>E-mail: " . $cliente["email"] . "</p>".
             "<p>Senha: " . $cliente["senha"] . "</p>".
             "</section>";
        }
        return $dados;
    }

    public function cadastrarFuncionario( $nome,$cpf, $sobrenome, $dataNasc, $telefone, $email, $salario){

        $funcionario = new Funcionario( $nome,$cpf, $sobrenome, $dataNasc, $telefone, $email, $salario);
        $this->bancoDeDados->inserirFuncionario($funcionario);
    }

    public function visualizarFuncionarios(){
        $listaFuncionarios =  $this->bancoDeDados->retornarFuncionarios();
        $dados = "";
        while($funcionarios = mysqli_fetch_assoc($listaFuncionarios)){
            $dados .= "<section class=\"conteudo-bloco\">
            <h2>".$funcionarios['nome']."&nbsp;".$funcionarios['sobrenome']."</h2>
            <p>CPF: ".$funcionarios['cpf']."</a><br>
            <p>Data de nascimento:".$funcionarios['dataNascimento']."</a><br>
            <p>Telefone: ".$funcionarios['telefone']."</a><br>
            <p>Email: ".$funcionarios['email']."</a><br>
            <p>Salario: R$ ".$funcionarios['salario']."</a>
            </section>";
        
        }
        return $dados;
    }

}

?>