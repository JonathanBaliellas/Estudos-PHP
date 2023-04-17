<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Excluído com Sucesso!</title>
</head>
<body>
    <div class="w3-content w3-padding w3-margin w3-third w3-text-grey w3-display-middle">
        <?php
            if(isset($_POST['btnCancelar'])){        
                header('Location: listar.php');
            }else{
                $serverName = 'localhost';
                $userName = 'root';
                $password = '';
                $dbName = 'pwii';
                $conexao = new mysqli($serverName,$userName,$password,$dbName);
            
                if($conexao->connect_error){
                    die('Conexão falhou... '. $conexao->connect_error);
                }

                $sql = "DELETE FROM amigo WHERE id_amigo = '". $_POST['txtID'] ."';";

                if($conexao->query($sql)===true){
                    echo '
                        <a href="listar.php">
                            <h1 class="w3-button w3-teal w3-round-large">Amigo removido com sucesso!</h1>
                        </a>
                    ';
                }else{
                    echo '
                        <a href="listar.php">
                            <h1 class="w3-button w3-teal w3-round-large">ERRO</h1>
                        </a>
                    ';
                }
            }

            $conexao->close();
        ?>
    </div>
</body>
</html>