<?php

class Funcionario{

    //Atributos
    protected $nome;
    protected $sobrenome;
    protected $cpf;
    protected $dataNasc;
    protected $telefone;
    protected $email;
    protected $salario;

    //Construtor
    public function __construct($nome,$sobrenome,$cpf,$dataNasc, $telefone, $email,$salario){
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->dataNasc = $dataNasc;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->salario = $salario;
    }

    //Getter e Setter
    public function get_Nome(){
        return($this->nome);
    }

    public function set_Nome($nome){
        $this->nome = $nome;
    }

    public function get_sobrenome(){
        return($this->sobrenome);
    }

    public function set_sobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
    }

    public function get_cpf(){
        return($this->cpf);
    }

    public function set_cpf($cpf){
        $this->cpf = $cpf;
    }

    public function get_dataNasc(){
        return($this->dataNasc);
    }

    public function set_dataNasc($dataNasc){
        $this->dataNasc = $dataNasc;
    }

    public function get_telefone(){
        return($this->telefone);
    }

    public function set_telefone($telefone){
        $this->telefone = $telefone;
    }

    public function get_email(){
        return($this->email);
    }

    public function set_email($email){
        $this->email = $email;
    }
    

    public function get_salario(){
        return($this->salario);
    }

    public function set_salario($salario){
        $this->salario = $salario;
    }
    
    
    
    
    
    
    // //Métodos
    // public function aplicarCupom($cupomTaxa){
    //     $valorDesconto = ($this->valor*$cupomTaxa) / 100;
    //     $this->valor = $this->valor - $valorDesconto;
    // }
    
}

?>