<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda 9</title>
</head>
<body>
    <?php 
        require_once "Paciente.php";
        $p = new Paciente();
        $p->setNome('Jeremias Barbosa');
        $p->setRg("326549871");
        $p->setCpf("32165498745");
        $p->setEndereco("Rua da Etec, 777 - Etecópolis");
        $p->setProfissao("Desenvolvedor de Sistemas");

        echo 'Nome: '.$p->getNome().'<br>';
        echo 'RG: '.$p->getRg().'<br>';
        echo 'CPF: '.$p->getCpf().'<br>';
        echo 'Endereço: '.$p->getEndereco().'<br>';
        echo 'Profissão: '.$p->getProfissao().'<br>';
    ?>
</body>
</html>