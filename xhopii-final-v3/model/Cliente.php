<?php

class Cliente{
      //Atributos
      protected $nome;
      protected $cpf;
      protected $sobrenome;
      protected $dataNascimento;
      protected $telefone;
      protected $email;
      protected $senha;
  
      //Construtor
      public function __construct($nome,$cpf,$sobrenome,$dataNascimento, $telefone, $email,$senha){
          $this->nome = $nome;
          $this->cpf = $cpf;
          $this->sobrenome = $sobrenome;    
          $this->dataNascimento = $dataNascimento;
          $this->telefone = $telefone;
          $this->email = $email;
          $this->senha = $senha;
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
  
      public function get_dataNascimento(){
          return($this->dataNascimento);
      }
  
      public function set_dataNascimento($dataNascimento){
          $this->dataNascimento = $dataNascimento;
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
      
  
      public function get_senha(){
          return($this->senha);
      }
  
      public function set_senha($senha){
          $this->senha = $senha;
      }
}

?>