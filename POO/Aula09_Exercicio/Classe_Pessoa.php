<?php
class Pessoa{
    //Atributos
    private $nome, $idade, $sexo;

    //Métodos Especiais
    function __construct($n, $i, $s){
        $this->setNome($n);
        $this->setIdade($i);
        $this->setSexo($s);
    }

    function getNome(){return $this->nome;}
    function getIdade(){return $this->idade;}
    function getSexo(){return $this->sexo;}

    private function setNome($n){$this->nome = $n;}
    private function setIdade($i){$this->idade = $i;}
    private function setSexo($s){$this->sexo = $s;}

    //Métodos
    function fazerAniversario(){
        $this->setIdade($this->getIdade()+1);
        echo "<h2>Aniversário de ". $this->getNome(). "</h2>
        <p>Parabéns para você
        <br>Nesta data querida!
        <br>Muitas felicidades!
        <br>Muitos anos de vida!</p>
        
        <p>É pique! É pique! É pique! É pique! É pique!
        <br>É hora! É hora! É hora! É hora! É hora!
        <br>Rá! Tim! Bum!
        <br>". $this->getNome() ."!</p>
        <p>Parabéns pelos seus ". $this->getIdade() ." anos!</p>";
    }
}
?>