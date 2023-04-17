<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET e POST</title>
</head>
<body>
    <p>Se liga...</p><br>
</body>
</html>

<?php
    //$nome = $_GET['nome'];
    $nome = $_POST['nome'];
    echo "Seja bem-vindo(a), ".$nome;
?>