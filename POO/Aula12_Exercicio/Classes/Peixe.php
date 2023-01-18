<?php
require_once 'Animal.php';

class Peixe extends Animal{
    private $corEscama;

    public function locomover(){echo "<p>Nadando...</p>";}
    public function alimentar(){echo "<p>Engolindo...</p>";}
    public function emitirSom(){echo "<p>Não faz som</p>";}
    public function soltarBolha(){echo "<p>Glub glub</p>";}

    public function setCorEscama($corEscama){$this->corEscama = $corEscama;}
    public function getCorEscama(){return $this->corEscama;}
}