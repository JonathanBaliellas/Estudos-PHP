<?php 
class OutrasFormacoes{
    //ATRIBUTOS
    private $id;
    private $idusuario;
    private $inicio;
    private $fim;
    private $descricao;

    //MÉTODOS
    public function inserirBD(){
        require_once 'ConexaoBD.php';

        $conexao = new ConexaoBD();
        $comunicacao = $conexao->conectar();
        if($comunicacao->connect_error){
            die("Conexão falhou: ". $comunicacao->connect_error);
        }

        $sql = "INSERT INTO OutrasFormacoes (idusuario, inicio, fim, descricao)
            VALUES ('". $this->idusuario ."',
                '". $this->inicio ."',
                '". $this->fim ."',
                '". $this->descricao ."')";

        if($comunicacao->query($sql) === true){
            $this->id = mysqli_insert_id($comunicacao);
            $comunicacao->close();
            return true;
        }else{
            $comunicacao->close();
            return false;
        }
    }

    public function excluirBD($id){
        require_once 'ConexaoBD.php';

        $conexao = new ConexaoBD();
        $comunicacao = $conexao->conectar();
        if($comunicacao->connect_error){
            die("Conexão falhou: ". $comunicacao->connect_error);
        }

        $sql = "DELETE FROM OutrasFormacoes WHERE id = '". $id ."';";

        if($comunicacao->query($sql) == true){
            $comunicacao->close();
            return true;
        }else{
            $comunicacao->close();
            return false;
        }
    }

    public function listaFormacoes($idusuario){
        require_once 'ConexaoBD.php';

        $conexao = new ConexaoBD();
        $comunicacao = $conexao->conectar();
        if($comunicacao->connect_error){
            die("Conexão falou: ". $comunicacao->connect_error);
        }

        $sql = "SELECT * FROM OutrasFormacoes WHERE idusuario = '". $idusuario ."';";
        $consulta = $comunicacao->query($sql);
        $comunicacao->close();
        return $consulta;
    }

    //ACESSORES
    public function setId($id){$this->id = $id;}
    public function getId(){return $this->id;}

    public function setIdusuario($idusuario){$this->idusuario = $idusuario;}
    public function getIdusuario(){return $this->idusuario;}

    public function setInicio($inicio){$this->inicio = $inicio;}
    public function getInicio(){return $this->inicio;}

    public function setFim($fim){$this->fim = $fim;}
    public function getFim(){return $this->fim;}

    public function setDescricao($descricao){$this->descricao = $descricao;}
    public function getDescricao(){return $this->descricao;}
}
?>