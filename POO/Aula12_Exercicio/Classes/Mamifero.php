<?php
require_once 'Animal.php';

class Mamifero extends Animal{
    private $corPelo;

    public function locomover(){echo "<p>Correndo...</p>";}
    public function alimentar(){echo "<p>Mamando</p>";}
    public function emitirSom(){echo "<p>Emitindo som de mamífero</p>";}
    
    public function setCorPelo($corPelo){$this->corPelo = $corPelo;}
    public function getCorPelo(){return $this->corPelo;}
}