<?php
require_once 'Interface_Publicacao.php';
require_once 'Classe_Pessoa.php';
class Livro{
    //Atributos
    private $titulo, $autor, $totPag, $pagAtual, $aberto, $leitor;

    //Métodos Especiais
    function __construct($t, $a, $tp, $l){
        $this->setTitulo($t);
        $this->setAutor($a);
        $this->setTotPag($tp);
        $this->setAberto(false);
        $this->setPagAtual(0);
        $this->setLeitor($l);
    }

    function getTitulo(){return $this->titulo;}
    function getAutor(){return $this->autor;}
    function getTotPag(){return $this->totPag;}
    function getPagAtual(){return $this->pagAtual;}
    function getAberto(){return $this->aberto;}
    function getLeitor(){return $this->leitor;}

    function setTitulo($t){$this->titulo = $t;}
    function setAutor($a){$this->autor = $a;}
    function setTotPag($tp){$this->totPag = $tp;}
    function setPagAtual($pa){$this->pagAtual = $pa;}
    function setAberto($a){$this->aberto = $a;}
    function setLeitor($l){$this->leitor = $l;}

    //Métodos de Classe
    function detalhes(){
        echo "<hr><p>Livro: ". $this->getTitulo() . " escrito por " . $this->getAutor()
        . "<br>Páginas: " . $this->getTotPag() . " | Página atual: " . $this->getPagAtual()
        . "<br>Sendo lido por " . $this->getLeitor()->getNome() . "</p>";
    }

    //Métodos de Interface
    function abrir(){
        if($this->getAberto()) echo "<p>O livro já está aberto</p>";
        else $this->setAberto(true);
    }
    function fechar(){
        if($this->getAberto()) $this->setAberto(false);
        else echo "<p>O livro já está fechado</p>";
    }
    function folhear(){
        if($this->getAberto()){
            $this->setPagAtual(random_int(1,$this->getTotPag()));
            echo "<br>Folheando...<br>Página ". $this->getPagAtual();
        }
        else echo "<p>O livro está fechado.<br>Não é possível folhear no momento.</p>";
    }
    function avancarPag(){
        if($this->getAberto()){
            $this->setPagAtual($this->getPagAtual()+1);
            echo "<br>Página ". $this->getPagAtual();
        }
        else echo "<p>O livro está fechado.<br>Não é possível avançar a página.</p>";
    }
    function voltarPag(){
        if($this->getAberto()){
            if($this->getPagAtual()>1){
                $this->setPagAtual($this->getPagAtual()-1);
                echo "<br>Página ". $this->getPagAtual();
            }else{
                echo "<p>Já está na página 1.</p>";
            }
        }else{
            echo "<p>O livro está fechado.<br>Não é possível voltar a página.</p>";
        }
    }
}
?>