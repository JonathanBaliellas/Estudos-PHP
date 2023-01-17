<?php
class ContaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct(){
        $this->saldo = 0;
        $this->status = false;
        echo "<p>Conta criada com sucesso!</p>";
    }

    public function abrirConta($tipo){
        $this->setStatus(true);
        $this->setTipo($tipo);
        if($tipo == 'CC'){
            $this->setSaldo(50);
        }else{
            $this->setSaldo(150);
        }
    }
    public function fecharConta(){
        if($this->getSaldo()>0){
            echo "<p>Não é possível encerrar a conta porque ainda há saldo. Por favor, saque todo o dinheiro antes de encerrar a conta.<br>
            Saldo: R$ {$this->getSaldo()}</p>";
        }else if($this->getSaldo()<0){
            echo "<p>Não é possível encerrar a conta porque o saldo é negativo!<br>
            Por favor, deposite R$ ". $this->saldo * -1 ." para prosseguir.</p>";
        }else{
            $this->status = false;
            echo "<p>Conta fechada com sucesso!</p>";
        }
    }
    public function depositar($valor){
        if($this->status == true){
            $this->saldo += $valor;
            echo "<p>{$this->getDono()}, recebemos o seu depósito no valor de R$ $valor!<br>
            Saldo: {$this->getSaldo()}</p>";
        }else{
            echo "<p>A conta está fechada. Não é possível efetuar a transação.</p>";
        }
        
    }
    public function sacar($valor){
        if($this->status == false){
            echo "<p>Não é possível sacar, pois a conta está fechada.</p>";
        }else if($this->saldo >= $valor){
            $this->saldo -= $valor;
            echo "<p>R$ $valor sacado com sucesso!<br>
            Saldo: R$ {$this->saldo}</p>";
        }else if($this->saldo > $valor -100){
            $this->saldo -= $valor;
            echo "<p>Você não tem saldo suficiente para efetuar o saque. Usará o limite.<br>
            Saldo: R$ {$this->saldo}</p>";
        }else{
            echo "<p>Você não tem saldo nem limite suficiente para efetuar essa transação.</p>";
        }
        
    }
    public function pagarMensal(){
        if($this->status == false){
            echo "<p>A conta está fechada. Não é possível pagar mensalidade.</p>";
        }else if($this->tipo == 'CC'){
            $this->saldo -= 12;
        }else{
            $this->saldo -= 20;
        }
    }

    public function getNumConta(){return $this->getNumConta;}
    public function getTipo(){return $this->tipo;}
    public function getDono(){return $this->dono;}
    public function getSaldo(){return $this->saldo;}
    public function getStatus(){return $this->status;}

    public function setNumConta($num){$this->numConta = $num;}
    public function setTipo($tipo){$this->tipo = $tipo;}
    public function setDono($nome){$this->dono = $nome;}
    public function setSaldo($valor){$this->saldo = $valor;}
    public function setStatus($status){$this->status = $status;}
}
?>