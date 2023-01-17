<?php
    class Teclado{
        private $marca;
        private $padrao;
        private $tipo;
        private $conexao;
        private $conectado;

        public function __construct($marca, $padrao, $tipo, $conexao){
            $this->setMarca($marca);
            $this->setPadrao($padrao);
            $this->setTipo($tipo);
            $this->setConexao($conexao);
            $this->conectado = false;
        }

        public function getMarca(){return $marca;}
        public function getPadrao(){return $padrao;}
        public function getTipo(){return $tipo;}
        public function getConexao(){return $conexao;}

        public function setMarca($m){$this->marca=$m;}
        public function setPadrao($p){$this->padrao=$p;}
        public function setTipo($t){$this->tipo=$t;}
        public function setConexao($c){$this->conexao=$c;}

        public function digitar(){
            if($this->conectado == true){
                echo "Estou escrevendo...<br>";
            }else{
                echo "[ERRO!] Teclado está desconectado<br>";
            }
        }
        public function apagar(){
            if($this->conectado == true){
                echo "Estou apagando tudo...<br>";
            }else{
                echo "[ERRO!] Teclado está desconectado<br>";
            }
        }
        public function conectar(){
            $this->conectado = true;
            echo "Teclado {$this->marca} {$this->conexao} foi conectado<br>";
        }
        public function desconectar(){
            $this->conectado = false;
            echo "Teclado {$this->marca} {$this->conexao} foi desconectado<br>";
        }
    }
?>