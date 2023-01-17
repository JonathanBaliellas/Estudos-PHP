<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5 - Prática com Objetos - Conta</title>
</head>
<body>
    <h1>Contas</h1>
    <pre>
    <?php
        require_once "ClasseConta.php";
        $conta1 = new ContaBanco;
        $conta2 = new ContaBanco;
        $conta1->abrirConta('CC');
        $conta1->setDono('Jubileu');
        $conta2->abrirConta('CP');
        $conta2->setDono('Creuza');

        $conta1->depositar(300);
        $conta2->depositar(500);

        $conta2->sacar(100);

        $conta1->pagarMensal();
        $conta2->pagarMensal();

        $conta1->sacar(348);
        $conta1->depositar(10);

        $conta1->fecharConta();

        print_r($conta1);
        print_r($conta2);
    ?>
    </pre>
</body>
</html>