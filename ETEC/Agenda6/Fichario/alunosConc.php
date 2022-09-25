<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-indigo.css">
    <title>Alunos Concluintes - MySQLi</title>
    <style>
        
        .w3-table-all tr:nth-child(even){background-color:#d8dcf1}
        .w3-hoverable tbody tr:hover,.w3-ul.w3-hoverable li:hover{background-color:#b1b8e3}
        .w3-table-all{border:1px solid #d8dcf1}
        .w3-bordered tr,.w3-table-all tr{border-bottom:1px solid #d8dcf1}
        .centro{margin-left: auto !important;margin-right:auto !important; width:50%;}
    </style>
</head>
<body class="w3-theme-l5">
    <section class="w3-container ">
        
        <div class="w3-border w3-indigo w3-center w3-padding w3-margin w3-round w3-card centro">
            <h1>Alunos Concluintes</h1>
        </div>
        <table class="w3-table-all w3-centered w3-hoverable w3-padding w3-margin centro">
            <thead>
                <tr class="w3-indigo">
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Nota 1</th>
                    <th>Nota 2</th>
                    <th>Nota 3</th>
                    <th>Nota 4</th>
                </tr>
            </thead>

            <?php
                $serverName = 'localhost';
                $userName = 'root';
                $password = '';
                $dbName = 'dsii_ag06_fichario';

                $conexao = new mysqli($serverName,$userName,$password,$dbName);

                if($conexao->connect_error) die('Falha na conexão: '. $conexao->connect_error);

                $sql = "SELECT * FROM aluno_concluinte;";
                $busca = $conexao->query($sql);

                if($busca!=null){
                    foreach($busca as $linha){
                        echo "
                            <tr>
                                <td>". $linha['id_aluno_concluinte'] ."</td>
                                <td>". $linha['nome'] ."</td>
                                <td>". $linha['nota1'] ."</td>
                                <td>". $linha['nota2'] ."</td>
                                <td>". $linha['nota3'] ."</td>
                                <td>". $linha['nota4'] ."</td>
                            </tr>
                        ";
                    }
                }

                $conexao->close();
            ?>
        </table>
    </section>
    <section class="w3-container w3-theme w3-center w3-padding-16" style="position: absolute; bottom: 0; width:100%;">
        <footer>
            <p>Desenvolvido por: Jonathan Baliellas</p>
            <p>Agenda 6 - DSII</p>
        </footer>
    </section>
</body>
</html>