<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Atividade Online</title>
</head>
<body>
    <div class="w3-container w3-teal">
        <h2>PROMOÇÃO DE MÊS DE ANIVERSÁRIO!</h2>
    </div>

    <div class="w3-container">
        <?php
            //VARIÁVEIS
            $nome = $_POST['txtNome'];
            $valor = $_POST['txtValorCompra'];
            $forma_pagto = $_POST['cmbPag'];
            $valor_desconto = 0;
            $desconto = 0;

            //PROCESSAMENTO
            if($forma_pagto == "Depósito"){$desconto = 0.1;}
            elseif($forma_pagto == "Boleto"){$desconto = 0.08;}
            $valor_desconto = $valor * $desconto;

            //SAÍDA
            echo "
            <p>$nome!</p>
            <p>Valor da Compra: R$ $valor<br>
            Forma de pagamento: $forma_pagto<br>
            Desconto: $valor_desconto (". $desconto * 100 ."%)</p>
            <p>Total a pagar: R$ ". $valor - $valor_desconto ."</p>";
        ?>
    </div>
</body>
</html>