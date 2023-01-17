<?php
require_once 'Class_Lutador.php';
class Luta{
    //Atributos
    private $desafiado, $desafiante, $rounds, $aprovada;

    //Métodos Especiais
    // function __construct($desafiado, $desafiante, $rounds, $aprov){
    //     $this->setDesafiado($desafiado);
    //     $this->setDesafiante($desafiante);
    //     $this->setRounds($rounds);
    //     $this->setAprovada($aprov);
    // }

    private function getDesafiado(){return $this->desafiado;}
    private function getDesafiante(){return $this->desafiante;}
    private function getRounds(){return $this->rounds;}
    private function getAprovada(){return $this->aprovada;}

    private function setDesafiado($lutador){$this->desafiado = $lutador;}
    private function setDesafiante($lutador){$this->desafiante = $lutador;}
    private function setRounds($rounds){$this->rounds = $rounds;}
    private function setAprovada($aprov){$this->aprovada = $aprov;}

    //Métodos
    function marcarLuta($lutadorA, $lutadorB){
        if($lutadorA->getCategoria() == $lutadorB->getCategoria()
                && $lutadorA != $lutadorB){
            $this->setAprovada(true);
            $this->setDesafiado($lutadorA);
            $this->setDesafiante($lutadorB);
        }else{
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }

    function lutar(){
        if($this->getAprovada()){
            echo "<h2>E a luta vai começar!</h2>";
            echo "<table><tbody><tr><td>";
            $this->getDesafiado()->apresentar();
            echo "</td><td><h2>VS</h2></td><td>";
            $this->getDesafiante()->apresentar();
            echo "</td></tr></tbody></table>";

            $vencedor = random_int(0,2);
            if($vencedor != 0){
                echo "<h2>E o vencedor foi ";
                if($vencedor == 1){
                    echo $this->getDesafiado()->getNome();
                    $this->getDesafiado()->ganharLuta();
                    $this->getDesafiante()->perderLuta();
                }else{
                    echo $this->getDesafiante()->getNome();
                    $this->getDesafiante()->ganharLuta();
                    $this->getDesafiado()->perderLuta();
                }
                echo "</h2>";
            }else{
                echo "<h2>Houve um empate!</h2>";
                $this->getDesafiado()->empatarLuta();
                $this->getDesafiante()->empatarLuta();
            }
            
        }else{
            echo "<p>A luta não foi aprovada</p>";
        }
    }
}
?>