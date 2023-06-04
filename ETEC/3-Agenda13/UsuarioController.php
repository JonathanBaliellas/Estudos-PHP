<?php 
if(!isset($_SESSION)){
    session_start();
}

class UsuarioController{
    public function inserir($nome, $cpf, $email, $senha)
    {
        require_once "";
        $usuario = new Usuario();
        
    }
}
?>