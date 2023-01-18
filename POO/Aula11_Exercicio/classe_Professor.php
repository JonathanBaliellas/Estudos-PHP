<?php
require_once "classe_Pessoa.php";

class Professor extends Pessoa{
    //ATRIBUTOS
    private $especialidade;
    private $salario;

    //MÉTODOS
    public function receberAumento($percentAumento){
        $percentAumento = $percentAumento / 100 + 1;
        $this->salario *= $percentAumento;
    }

    //MÉTODOS ACESSORES
    public function setEspecialidade($especialidade){$this->especialidade = $especialidade;}
    public function getEspecialidade(){return $this->especialidade;}
    public function setSalario($salario){$this->salario = $salario;}
    public function getSalario(){return $this->salario;}
}
?>