<?php
class Lutador{
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    //Métodos Especiais
    function __construct($nome, $nacionalidade, $idade, $altura, $peso, $v, $d, $e){
        $this->setNome($nome);
        $this->setNacionalidade($nacionalidade);
        $this->setIdade($idade);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setVitorias($v);
        $this->setDerrotas($d);
        $this->setEmpates($e);
    }

    function getNome(){return $this->nome;}
    function getNacionalidade(){return $this->nacionalidade;}
    function getIdade(){return $this->idade;}
    function getAltura(){return $this->altura;}
    function getPeso(){return $this->peso;}
    function getCategoria(){return $this->categoria;}
    function getVitorias(){return $this->vitorias;}
    function getDerrotas(){return $this->derrotas;}
    function getEmpates(){return $this->empates;}

    function setNome($nome){$this->nome = $nome;}
    function setNacionalidade($nacionalidade){$this->nacionalidade = $nacionalidade;}
    function setIdade($idade){$this->idade = $idade;}
    function setAltura($altura){$this->altura = $altura;}
    function setPeso($peso){$this->peso = $peso;$this->setCategoria();}
    private function setCategoria(){
        if($this->getPeso() < 52.2 || $this->getPeso() > 120.2){
            $this->categoria = 'Inválido';
        }elseif($this->getPeso() <= 70.3){
            $this->categoria = 'Leve';
        }elseif($this->getPeso() <= 83.9){
            $this->categoria = 'Médio';
        }else{
            $this->categoria = 'Pesado';
        }
    }
    private function setVitorias($vitorias){$this->vitorias = $vitorias;}
    private function setDerrotas($derrotas){$this->derrotas = $derrotas;}
    private function setEmpates($empates){$this->empates = $empates;}

    //Métodos
    function apresentar(){
        echo "<h3>" .  $this->getNome() ."</h3>";
        echo "<br>Origem: " . $this->getNacionalidade();
        echo "<br>". $this->getIdade() . " anos | ";
        echo $this->getPeso() ." kg | ";
        echo $this->getAltura() . " m<br>";
        echo "<table><tbody><tr><td>Vitorias</td>
        <td>Derrotas</td><td>Empates</td></tr><tr><td>"
        . $this->getVitorias() . "</td><td>"
        . $this->getDerrotas() . "</td><td>"
        . $this->getEmpates() ."</td></tr></tbody></table>";
    }
    function status(){
        echo "<b>". $this->getNome() ."</b>";
        echo "<br>Lutador peso ". $this->getCategoria();
        echo "<table><tbody><tr><td>Vitorias</td>
        <td>Derrotas</td><td>Empates</td></tr><tr><td>"
        . $this->getVitorias() . "</td><td>"
        . $this->getDerrotas() . "</td><td>"
        . $this->getEmpates() ."</td></tr></tbody></table>";
    }
    function ganharLuta(){$this->setVitorias($this->getVitorias() + 1);}
    function perderLuta(){$this->setDerrotas($this->getDerrotas() + 1);}
    function empatarLuta(){$this->setEmpates($this->getEmpates() + 1);}
}
?>