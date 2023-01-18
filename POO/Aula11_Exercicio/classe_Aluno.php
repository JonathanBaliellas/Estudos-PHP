<?php
require_once "classe_Pessoa.php";

class Aluno extends Pessoa{
    //ATRIBUTOS
    private $matricula;
    private $curso;

    //MÉTODOS
    public function pagarMensalidade(){
        echo "<p>Mensalidade paga com sucesso!</p>";
    }

    //MÉTODOS ACESSORES
    public function setMatricula($matricula){$this->matricula = $matricula;}
    public function getMatricula(){return $this->matricula;}
    public function setCurso($curso){$this->curso = $curso;}
    public function getCurso(){return $this->curso;}
}
?>