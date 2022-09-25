<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Editar Amiguinho - MySQLi</title>
</head>
<body>
    <div class="w3-content w3-padding w3-margin w3-text-gray w3-third w3-display-middle">
        <h1 class="w3-teal w3-margin w3-center w3-round-large">Atualizar ID <?php echo $_GET['id'] ?></h1>

        <form action="editarAction.php" method="post" class="w3-container">
            <input type="hidden" name="txtId" value="<?php echo $_GET['id'] ?>">
            <br>
            <label for="" class="w3-text-teal" style="font-weight: bold;">Nome</label>
            <input type="text" name="txtNome" class="w3-input w3-round w3-border w3-light-grey" value="<?php echo $_GET['nome'] ?>">
            <br>
            <label for="" class="w3-text-teal" style="font-weight: bold;">Apelido</label>
            <input type="text" name="txtApelido" class="w3-input w3-round w3-border w3-light-grey" value="<?php echo $_GET['apelido'] ?>">
            <br>
            <label for="" class="w3-text-teal" style="font-weight: bold;">e-Mail</label>
            <input type="text" name="txtEmail" class="w3-input w3-round w3-border w3-light-grey" value="<?php echo $_GET['email'] ?>">
            <br>
            <button class="w3-button w3-red w3-round" name="btnCancelar"><i class="fa fa-ban w3-large"></i> Cancelar</button>
            <button class="w3-button w3-teal w3-right w3-round" name="btnAtualizar"><i class="fa fa-refresh w3-large"></i> Atualizar</button>
        </form>
    </div>
</body>
</html>