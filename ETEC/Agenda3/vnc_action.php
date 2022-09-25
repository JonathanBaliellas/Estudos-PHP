<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo do Aumento</title>
</head>
<body>
    <?php
        //VARIÁVEIS
        $nome = $_POST['txt_nome'];
        $salario = $_POST['txt_sal'];
        $dependentes = $_POST['txt_dep'];
        $aumento;
        $novoSal;

        //PROCESSAMENTO
        if($salario <= 500){
            $dependentes <= 5 ? $aumento = 1.15 : $aumento = 1.20;
        }elseif($salario <= 1000){
            $dependentes <= 5 ? $aumento = 1.1 : $aumento = 1.15;
        }elseif($salario <= 2000){
            $dependentes <= 5 ? $aumento = 1.1 : $aumento = 1.12;
        }else{
            $dependentes <= 5 ? $aumento = 1.08 : $aumento = 1.1;
        }

        $novoSal = $salario * $aumento;

        //SAÍDA
        echo "Com um salário de $salario, $nome receberá um aumento de ".($aumento - 1)*100 ."%, passando a receber $novoSal";
    ?>
</body>
</html>