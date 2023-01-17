<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 7 - Relacionamento entre Classes</title>
    <style>
        td{
            padding-right: 16px;
            text-align: center;
        }
        h3{
            margin-bottom: 0px;
        }
    </style>
</head>
<body>
    <h1>Ultra Emoji Combat (UEC)</h1>
    
    <?php
        require_once 'Class_Lutador.php';
        require_once 'Class_Luta.php';
        $lutador = [
            new Lutador('Pretty Boy', 'França', 31, 1.75, 68.9, 11, 3, 1),
            new Lutador('Putscript', 'Brasil', 29, 1.68, 57.8, 14, 2, 3),
            new Lutador('Snapshadow', 'EUA', 35, 1.65, 80.9, 12, 2 ,1),
            new Lutador('Deathcode', 'Austrália', 28, 1.93, 81.6, 13, 0, 2),
            new Lutador('Ufocobol', 'Brasil', 37, 1.7, 119.3, 5, 4, 3),
            new Lutador('Nerdaard', 'EUA', 30, 1.81, 105.7, 12, 2, 4)
        ];

        $index = [3,2];

        $UEC01 = new Luta();
        $UEC01->marcarLuta($lutador[$index[0]],$lutador[$index[1]]);
        $UEC01->lutar();
        echo "<table><tbody><tr><td>";
        $lutador[$index[0]]->status();
        echo "</td><td>";
        $lutador[$index[1]]->status();
        echo "</td></tr></tbody></table>";
    ?>
</body>
</html>