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
    <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
        <?php
            $serverName = "localhost";
            $userName = "root";
            $password = "";
            $dbName = "pwii";
            $conexao = new mysqli($serverName, $userName, $password, $dbName);

            if($conexao->connect_error){
                die("Connection failed: " . $conexao->connect_error);
            }

            $sql = "INSERT INTO amigo (nome, apelido, email)
            VALUES ('".$_POST['txtNome']."', '".$_POST['txtApelido']."', '".$_POST['txtEmail']."')";
            
            if($conexao->query($sql)===true){
                echo '
                    <a href="index.php">
                        <h1 class="w3-button w3-teal">Amigo salvo com sucesso!</h1>
                    </a>
                ';
            }else{
                echo '
                    <a href="index.php">
                        <h1 class="w3-button w3-teal">ERRO!</h1>
                    </a>
                ';
            }

            $conexao->close();//Encerra a conexão com o banco de dados
        ?>
    </div>
</body>
</html>