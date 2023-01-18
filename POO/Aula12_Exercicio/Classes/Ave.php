<?php
require_once 'Animal.php';

class Ave extends Animal{
    private $corPena;

    public function locomover(){echo "<p>Voando...</p>";}
    public function alimentar(){echo "<p>Bicando</p>";}
    public function emitirSom(){echo "<p>Emitindo som de ave</p>";}
    
    public function fazerNinho(){echo "<p>Construindo um ninho...</p>";}

    public function setCorPena($corPena){$this->corPena = $corPena;}
    public function getCorPena(){return $this->corPena;}
}