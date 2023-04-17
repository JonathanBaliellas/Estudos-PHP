<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Remover Amiguinho (Desfazer amizade: cuidado)</title>
</head>
<body>
    <div class='w3-content w3-text-grey w3-display-middle w3-padding w3-margin w3-third'>
        <h1 class='w3-teal w3-center w3-margin w3-round-large'>Remover ID <?php echo $_GET['id']?></h1>
        <form action="excluirAction.php" method="post" class="w3-container">
            <input type="hidden" name="txtID" class="w3-input w3-grey w3-border" value="<?php echo $_GET['id']?>">
            <br>
            <label for="" class="w3-text-teal" style="font-weight: bold;">Nome</label>
            <input type="" name="txtNome" class="w3-input w3-border w3-grey" disabled value="<?php echo $_GET['nome'] ?>">
            <br>
            <label for="" class="w3-text-teal" style="font-weight: bold;">Apelido</label>
            <input type="" name="txtApelido" class="w3-input w3-border w3-grey" disabled value="<?php echo $_GET['apelido'] ?>">
            <br>
            <label for="" class="w3-text-teal" style="font-weight: bold;">e-Mail</label>
            <input type="" name="txtEmail" class="w3-input w3-border w3-grey" disabled value="<?php echo $_GET['email'] ?>">
            <br>
            <button name="btnCancelar" class="w3-button w3-red w3-cell w3-round-large w3-left"><i class="fa fa-ban w3-large"></i> Cancelar</button>
            <button name="btnExcluir" class="w3-button w3-teal w3-round-large w3-cell w3-right"><i class="fa fa-check w3-large"></i> Confirmar Exclusão</button>
        </form>
    </div>
</body>
</html>