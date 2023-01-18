<?php
abstract class Pessoa{
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $xp;

    public function __construct($nome, $idade, $sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->xp = 0;
    }

    abstract protected function ganharXP();

    public function setNome($nome){$this->nome = $nome;}
    public function getNome(){return $this->nome;}
    public function setIdade($idade){$this->idade = $idade;}
    public function getIdade(){return $this->idade;}
    public function setSexo($sexo){$this->sexo = $sexo;}
    public function getSexo(){return $this->sexo;}
    public function setXP($xp){$this->xp = $xp;}
    public function getXP(){return $this->xp;}
}