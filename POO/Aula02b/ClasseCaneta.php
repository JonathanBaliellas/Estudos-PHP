<?php
    class Caneta{
        var $cor; //Vermelho; Azul; Verde
        var $ponta; //Ex.: 0.5; 0.7; 1.2
        var $carga; //0 ~ 1 (0% ~ 100%)
        var $tampada; //true/false

        function escrever(){
            if($this->tampada==true){
                echo "<p>Caneta $this->cor: A caneta está tampada e não é possível escrever</p>";
            }else{
                echo "<p>Caneta $this->cor: Estou escrevendo...</p>";
            }
        }

        function tampar(){
            $this->tampada=true;
        }

        function destampar(){
            $this->tampada=false;
        }
    }
?>