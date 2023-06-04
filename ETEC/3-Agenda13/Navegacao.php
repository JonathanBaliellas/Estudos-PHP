<?php 
switch($_POST){
    //Caso a variável seja nula, mostrar tela de login
    case isset($_POST[null]):
        include_once "../3-Agenda12/login.php";
        break;

    //--- Primeiro Acesso ---//
    case isset($_POST["btnPrimeiroAcesso"]):
        include_once "../3-Agenda12/primeiroAcesso.php";
        break;

    //--- Cadastrar ---//
    case isset($_POST["btnCadastrar"]):
        require_once "UsuarioController.php";
        $uController = new UsuarioController();
}
?>