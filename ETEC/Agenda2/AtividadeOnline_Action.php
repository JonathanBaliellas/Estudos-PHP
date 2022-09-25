<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>GET e POST</title>
</head>
<body>
    <div class="w3-container w3-teal">
        <h2>Cadastro Confirmado com sucesso</h2>
    </div> 

    <div class="w3-container">
        <?php
            echo "
                <p class='w3-text-teal'><b>Nome: </b>".$_POST['txtNome']." ".$_POST['txtSobrenome']."</p>

                <p class='w3-text-teal'><b>e-Mail: </b>".$_POST['txtEmail']."</p>

                <p class='w3-text-teal'><b>Formação: </b>".$_POST['txtFormacao']."</p>

                <p class='w3-text-teal'><b>Descrição do último emprego: </b>".$_POST['txtEmprego']."</p>
            ";
        ?>    
    </div>    
</body>
</html>