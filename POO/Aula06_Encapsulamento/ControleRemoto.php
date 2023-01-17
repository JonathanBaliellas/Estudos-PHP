<?php
require_once 'Controlador.php'; //Importa a interface
class ControleRemoto implements Controlador{//Implementa a interface
    //Atributos
    private $volume;
    private $ligado;
    private $tocando;

    //Métodos Especiais
    function __construct(){
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    private function getVolume(){return $this->volume;}
    private function getLigado(){return $this->ligado;}
    private function getTocando(){return $this->tocando;}

    private function setVolume($valor){$this->volume = $valor;}
    private function setLigado($param){$this->ligado = $param;}
    private function setTocando($param){$this->tocando = $param;}

    //Métodos
    public function ligar(){$this->setLigado(true);}
    public function desligar(){$this->setLigado(false);}
    public function abrirMenu(){
        echo "<br>Ligado? " . ($this->getLigado()?"Sim":"Não");
        echo "<br>Tocando? " . ($this->getTocando()?"Sim":"Não");
        echo "<br>Volume: " . $this->getVolume() ." ";
        for($i=0;$i<=$this->getVolume();$i+=10){
            echo "|";
        }
        echo "<br>";
    }
    public function fecharMenu(){echo "Fechando menu...";}
    public function maisVolume(){
        if($this->getLigado()){$this->setVolume($this->getVolume()+5);}
    }
    public function menosVolume(){
        if($this->getLigado()){$this->setVolume($this->getVolume()-5);}
    }
    public function ligarMudo(){
        if($this->getLigado()){$this->setVolume(0);}
    }
    public function desligarMudo(){
        if($this->getLigado()){$this->setVolume(50);}
    }
    public function play(){
        if($this->getLigado() && !($this->getTocando())){$this->setTocando(true);}
    }
    public function pause(){
        if($this->getLigado() && $this->getTocando()){$this->setTocando(false);}
    }
}
?>