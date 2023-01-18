<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>
<pre>
<?php
    //IMPORTAÇÕES
    require_once "classe_Visitante.php";
    require_once "classe_Aluno.php";
    require_once "classe_Professor.php";
    require_once "classe_Bolsista.php";
    require_once "classe_Tecnico.php";

    //VISITANTE
    $v1 = new Visitante();
    $v1->setNome("João");
    $v1->setIdade(30);
    print_r($v1);
    echo "<br>";
    $v1->fazerAniversario();
    print_r($v1);
    echo "<br>";

    //ALUNO
    $a1 = new Aluno();
    $a1->setNome("José");
    $a1->setMatricula(1);
    $a1->setCurso("POO");
    $a1->setIdade(15);
    $a1->fazerAniversario();
    $a1->pagarMensalidade();
    print_r($a1);
    echo "<br>";

    //PROFESSOR
    $p1 = new Professor();
    $p1->setNome("Jubileu");
    $p1->setSalario(1000);
    $p1->setEspecialidade("POO");
    $p1->setIdade(50);
    $p1->fazerAniversario();
    $p1->receberAumento(15);
    print_r($p1);
    echo "<br>";

    //BOLSISTA
    $b1 = new Bolsista();
    $b1->setNome("Jeremias");
    $b1->setIdade(15);
    $b1->setMatricula(2);
    $b1->setCurso("Photoshop");
    $b1->setBolsa(50);
    $b1->fazerAniversario();
    $b1->pagarMensalidade();
    $b1->renovarBolsa();
    print_r($b1);
    echo "<br>";

    //TÉCNICO
    $t1 = new Tecnico();
    $t1->setNome("Juliano");
    $t1->setIdade(17);
    $t1->setMatricula(3);
    $t1->setCurso("Elétrica");
    $t1->setRegistroProfissional("014354-9");
    $t1->pagarMensalidade();
    $t1->fazerAniversario();
    $t1->praticar();
    print_r($t1);
    echo "<br>";
?>
</pre>
</body>
</html>