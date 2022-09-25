<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Amigo atualizado</title>
</head>
<body>
    <div class="w3-content w3-padding w3-margin w3-text-grey w3-display-middle w3-third w3-border w3-round-large w3-center">
        <?php
            if(isset($_POST['btnCancelar'])){
                header('location: listar.php');
            }else{
                $serverName = 'localhost';
                $userName = 'root';
                $password = '';
                $dbName = 'pwii';
                $conexao = new mysqli($serverName,$userName,$password,$dbName);
            
                if($conexao->connect_error){
                    die('Conexão falhou... '. $conexao->connect_error);
                }
    
                
                $sql = "UPDATE amigo SET
                    nome = '". $_POST['txtNome'] ."',
                    apelido = '". $_POST['txtApelido'] ."',
                    email = '". $_POST['txtEmail'] ."'
                WHERE id_amigo = '". $_POST['txtId'] ."';";
   
                if($conexao->query($sql)===true){
                    echo "
                        <h1>Amigo atualizado com sucesso!</h1>
                        <a href='listar.php' class='w3-padding w3-margin w3-button w3-teal w3-round-large w3-center'>Ok</a>
                    ";
                    $id = mysqli_insert_id($conexao);
                }else{
                    echo "
                        <h1>Falha ao atualizar amigo!</h1>
                        <a href='listar.php' class='w3-padding w3-margin w3-button w3-teal w3-round-large w3-center'>Ok</a>
                    ";
                }
                $conexao->close();
            }
        ?>
    </div>
</body>
</html>