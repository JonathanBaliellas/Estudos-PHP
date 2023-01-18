<?php
require_once 'Classes/Gafanhoto.php';
require_once 'Classes/Video.php';

class Visualizacao{
    private $espectador;
    private $video;

    public function __construct($espectador, $video){
        $this->espectador = $espectador;
        $this->video = $video;
        $this->video->setViews($this->video->getViews() + 1);
        $this->espectador->viuMaisUm();
    }

    public function avaliarNota($nota){$this->video->setAvaliacao($nota);}

    public function avaliarPorc($porc){
        $nota = 0;
        if($porc < 20) $nota = 3;
        elseif($porc <= 50) $nota = 5;
        else $nota = 10;
        $this->video->setAvaliacao($nota);
    }

    public function setEspectador($espectador){$this->espectador = $espectador;}
    public function getEspectador(){return $this->espectador;}
    public function setVideo($video){$this->video = $video;}
    public function getVideo(){return $this->video;}
}