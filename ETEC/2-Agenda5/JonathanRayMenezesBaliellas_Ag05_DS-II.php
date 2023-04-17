<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-indigo.css">
    <title>Notas da Turma 8A</title>
</head>
<body>
    <section class="w3-theme w3-container w3-card" id='sect_header'>
        <h1 class="w3-center">8º ANO A</h1>
    </section>

    <section class="w3-display-container" id='sect_table'>
        <div class="w3-half w3-animate-top w3-padding w3-display-topmiddle">
            <table class="w3-table-all w3-hoverable w3-text-black w3-theme-l5">
                <tr class="w3-theme">
                    <th class="w3-center">Aluno</th>
                    <th class="w3-center">1º Semestre</th>
                    <th class="w3-center">2º Semestre</th>
                </tr>
                
                <?php
                    $alunos = array(
                        array("nome"=> "Aline","primeiroSemestre"=> 10, "segundoSemestre"=> 9.5),
                        array("nome"=> "Alfredo","primeiroSemestre"=> 8, "segundoSemestre"=> 5),
                        array("nome"=> "Carla","primeiroSemestre"=> 5, "segundoSemestre"=> 6.5),
                        array("nome"=> "César","primeiroSemestre"=> 9, "segundoSemestre"=> 9),
                        array("nome"=> "Daniel","primeiroSemestre"=> 10, "segundoSemestre"=> 7),
                        array("nome"=> "Esnar","primeiroSemestre"=> 8, "segundoSemestre"=> 6),
                        array("nome"=> "Henzo","primeiroSemestre"=> 6, "segundoSemestre"=> 8),
                        array("nome"=> "Pablo","primeiroSemestre"=> 7, "segundoSemestre"=> 5),
                        array("nome"=> "Wallace","primeiroSemestre"=> 8, "segundoSemestre"=> 7),
                        array("nome"=> "Zulmira","primeiroSemestre"=> 10, "segundoSemestre"=> 6)
                        );

                    foreach($alunos as $aluno){
                        echo '
                            <tr>
                                <td class="w3-center">'.$aluno['nome'].'</td>
                                <td class="w3-center">'.$aluno['primeiroSemestre'].'</td>
                                <td class="w3-center">'.$aluno['segundoSemestre'].'</td>
                            </tr>
                        ';
                    }
                ?>
            </table>
        </div>
    </section>
</body>
</html>