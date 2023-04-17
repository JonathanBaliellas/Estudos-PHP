<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Matriz: Estados Brazukas</title>
    <style>
        body{
            max-width: 600px;
            margin: 50px;
        }
    </style>
</head>
<body>
    <table class="w3-table-all w3-hoverable w3-text-black">
        <tr class="w3-teal">
            <th class="w3-center">Estado</th>
            <th class="w3-center">Sigla</th>
        </tr>
        <?php
            $estadosBR = array(
                array('estado'=>'Acre','uf'=>'AC'),
                array('estado'=>'Alagoas','uf'=>'AL'),
                array('estado'=>'Amapá','uf'=>'AP'),
                array('estado'=>'Amazonas','uf'=>'AM'),
                array('estado'=>'Bahia','uf'=>'BA'),
                array('estado'=>'Ceará','uf'=>'CE'),
                array('estado'=>'Distrito Federal','uf'=>'DF'),
                array('estado'=>'Espírito Santo','uf'=>'ES'),
                array('estado'=>'Goiás','uf'=>'GO'),
                array('estado'=>'Maranhão','uf'=>'MA'),
                array('estado'=>'Mato Grosso','uf'=>'MT'),
                array('estado'=>'Mato Grosso do Sul','uf'=>'MS'),
                array('estado'=>'Minas Gerais','uf'=>'MG'),
                array('estado'=>'Pará','uf'=>'PA'),
                array('estado'=>'Paraíba','uf'=>'PB'),
                array('estado'=>'Paraná','uf'=>'PR'),
                array('estado'=>'Pernambuco','uf'=>'PE'),
                array('estado'=>'Piaí','uf'=>'PI'),
                array('estado'=>'Rio de Janeiro','uf'=>'RJ'),
                array('estado'=>'Rio Grande do Norte','uf'=>'RN'),
                array('estado'=>'Rio Grande do Sul','uf'=>'RS'),
                array('estado'=>'Rondônia','uf'=>'RO'),
                array('estado'=>'Roraima','uf'=>'RR'),
                array('estado'=>'Santa Catarina','uf'=>'SC'),
                array('estado'=>'São Paulo','uf'=>'SP'),
                array('estado'=>'Sergipe','uf'=>'SE'),
                array('estado'=>'Tocantins','uf'=>'TO'),
            );

            foreach($estadosBR as $estado){
                echo '
                <tr>
                    <td class="w3-center">'. $estado['estado'] .'</td>
                    <td class="w3-center">'. $estado['uf'] .'</td>
                </tr>
                <br>';
            }
            
        ?>
    </table>
</body>
</html>