<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Lista de Amigos - MySQLi</title>
</head>
<body>
    <a href="index.php">
        <i class="fa fa-arrow-circle-left w3-large w3-teal w3-button w3-xxlarge"></i>
    </a>
    <div class="w3-content w3-padding w3-display-topmiddle w3-half w3-margin">
        <h1 class="w3-teal w3-center w3-round-large w3-margin">Lista de amiguinhos</h1>
        <table class="w3-table-all w3-centered w3-hoverable">
            <thead>
                <tr class="w3-center w3-teal">
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Apelido</th>
                    <th>e-Mail</th>
                    <th>Remover</th>
                    <th>Editar</th>
                </tr>
            </thead>
            
            <?php
                    $serverName = 'localhost';
                    $userName = 'root';
                    $password = '';
                    $dbName = 'pwii';

                    $conexao = new mysqli($serverName,$userName,$password,$dbName);
                    if($conexao->connect_error){
                        die("Conexão falhou: ". $conexao->connect_error);
                    }

                    $sql = "SELECT * FROM amigo";
                    $resultado = $conexao->query($sql);
                    if($resultado!=null)
                    foreach($resultado as $linha){
                        echo '
                            <tr>
                                <td>'.$linha['id_amigo'].'</td>
                                <td>'.$linha['nome'].'</td>
                                <td>'.$linha['apelido'].'</td>
                                <td>'.$linha['email'].'</td>
                                <td><a href="excluir.php?id='.$linha['id_amigo'].'&nome='.$linha['nome'].'&apelido='.$linha['apelido'].'&email='.$linha['email'].'"><i class="fa fa-user-times w3-large w3-text-teal"></i></a></td>
                                <td><a href="editar.php?id='.$linha['id_amigo'].'&nome='.$linha['nome'].'&apelido='.$linha['apelido'].'&email='.$linha['email'].'"><i class="fa fa-refresh w3-large w3-text-teal"></i></a></td>
                            </tr>
                        ';
                    }

                    $conexao->close();
                ?>
        </table>
    </div>
</body>
</html>