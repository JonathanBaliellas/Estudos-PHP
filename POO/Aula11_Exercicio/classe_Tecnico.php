<?php
require_once "classe_Aluno.php";

class Tecnico extends Aluno{
    //ATRIBUTOS
    private $registroProfissional;

    //MÉTODOS
    public function praticar(){echo "<p>Estou praticando...</p>";}

    //MÉTODOS ACESSORES
    public function setRegistroProfissional($registroProfissional){$this->registroProfissional = $registroProfissional;}
    public function getRegistroProfissional(){return $this->registroProfissional;}
}
?>