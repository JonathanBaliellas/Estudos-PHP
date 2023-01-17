<?php
    class MonitorAudio{
        public $modelo;
        public $woofer;
        public $tweeter;
        private $volume;
        private $ligado;
        private $auxIn;
        private $phoneOut;

        function ligar(){
            if($this->ligado == true){
                echo "<p>[ERRO!] Monitor já está ligado</p>";
            }else{
                $this->ligado = true;
                echo "<p>Ligando...</p>";
            }
        }

        function desligar(){
            if($this->ligado == false){
                echo "<p>[ERRO!] Monitor já está desligado</p>";
            }else{
                $this->ligado = false;
                echo "<p>Desligando...</p>";
            }
        }

        function aumentarVol(){
            $this->volume += 0.05;
            if($this->volume > 1){
                echo "<p>[ERRO!] Volume máximo</p>";
                $this->volume = 1;
            }
            echo "<p>Volume: " . $this->volume * 100 . "%</p>";
        }

        function diminuirVol(){
            $this->volume -= 0.05;
            if($this->volume < 0){
                echo "<p>[ERRO!] Volume mínimo</p>";
                $this->volume = 0;
            }
            echo "<p>Volume: " . $this->volume * 100 . "%</p>";
        }

        function conectarAux(){
            if($this->auxIn == true){
                echo "<p>[ERRO!] Equipamento já conectado...<br>Remova o equpamento para conectar outro.";
            }else{
                $this->auxIn = true;
                echo "<p>Conectando equipamento auxiliar...</p>";
            }
        }

        function desconectarAux(){
            if($this->auxIn == false){
                echo "<p>[ERRO!] Não há equipamento conectado...</p>";
            }else{
                $this->auxIn = false;
                echo "<p>Desconectando equipamento auxiliar...</p>";
            }
        }

        function conectarFone(){
            if($this->phoneOut == true){
                echo "<p>[ERRO!] Fone já conectado.</p>";
            }else{
                $this->phoneOut = true;
                echo "<p>Conectando fone...</p>";
            }
        }

        function desconectarFone(){
            if($this->phoneOut == false){
                echo "<p>[ERRO!] Nenhum fone conectado.</p>";
            }else{
                $this->phoneOut = false;
                echo "<p>Desconectando fone...</p>";
            }
        }
    }
?>