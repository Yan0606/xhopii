<?php

class Produto{

    //Atributos
    protected $nome;
    protected $fabricante;
    protected $descricao;
    protected $valor;

    //Construtor
    public function __construct($Nome,$Fabricante,$Descricao,$Valor){
        $this->nome = $Nome;
        $this->fabricante = $Fabricante;
        $this->descricao = $Descricao;
        $this->valor = $Valor;
    }

    //Getter e Setter
    public function get_Nome(){
        return($this->nome);
    }

    public function set_Nome($Nome){
        $this->nome = $Nome;
    }

    public function get_Fabricante(){
        return($this->fabricante);
    }

    public function set_Fabricante($Fabricante){
        $this->fabricante = $Fabricante;
    }

    public function get_Descricao(){
        return($this->descricao);
    }

    public function set_Descricao($Descricao){
        $this->descricao = $Descricao;
    }

    public function get_Valor(){
        return($this->valor);
    }

    public function set_Valor($Valor){
        $this->valor = $Valor;
    }

    //Métodos
    public function aplicarCupom($cupomTaxa){
        $valorDesconto = ($this->valor*$cupomTaxa) / 100;
        $this->valor = $this->valor - $valorDesconto;
    }
}
?>