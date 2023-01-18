<?php
require_once "classe_Aluno.php";

class Bolsista extends Aluno{
    //ATRIBUTOS
    private $bolsa;

    //MÉTODOS
    public function renovarBolsa(){
        echo "<p>Bolsa renovada com sucesso!</p>";
    }

    public function pagarMensalidade(){
        echo "<p>Aluno bolsista paga mensalidade com desconto!</p>";
    }

    //MÉTODOS ACESSORES
    public function setBolsa($bolsa){$this->bolsa = $bolsa;}
    public function getBolsa(){return $this->bolsa;}
}
?>