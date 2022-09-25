<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cadastro - MySQLi</title>
</head>
<body>
    <a href="index.php" class="w3-display-topleft">
        <i class="fa fa-arrow-circle-left w3-large w3-teal w3-button w3-xxlarge"></i>
    </a>

    <div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">
        <h1 class="w3-center w3-teal w3-round-large w3-margin">Cadastro de Amigos</h1>

        <form action="cadastroAction.php" method="post" class="w3-container">
            <label for="" class="w3-text-teal" style="font-weight: bold;">Código</label>
            <input type="" name="txtID" id="" class="w3-input w3-grey w3-border" disabled>
            <br>
            <label for="" class="w3-text-teal" style="font-weight: bold;">Nome</label>
            <input type="" name="txtNome" id="" class="w3-input w3-light-grey w3-border">
            <br>
            <label for="" class="w3-text-teal" style="font-weight: bold;">Apelido</label>
            <input type="" name="txtApelido" id="" class="w3-input w3-light-grey w3-border">
            <br>
            <label for="" class="w3-text-teal" style="font-weight: bold;">e-Mail</label>
            <input type="" name="txtEmail" id="" class="w3-input w3-light-grey w3-border">
            <br>
            <button name="btnAdicionar" class="w3-button w3-teal w3-cell w3-round-large w3-right w3-margin-right">
                <i class="w3-xxlarge fa fa-user-plus"></i> Adicionar
            </button>
        </form>
    </div>
</body>
</html>