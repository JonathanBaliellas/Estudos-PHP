<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Finais</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Classes/Gafanhoto.php';
        require_once 'Classes/Video.php';
        require_once 'Agregacao/Visualizacao.php';

        $g1 = new Gafanhoto("Jontz", 31, "M", "zJontz");
        print_r($g1);

        $v1 = new Video("Meu peido perfeito");
        print_r($v1);
        $v1->play();

        $v2 = new Video("Um cocô na estrada");

        $vis = new Visualizacao($g1, $v1);
        $vis2 = new Visualizacao($g1, $v2);
        $vis2->avaliarNota(3);
        $vis3 = new Visualizacao($g1, $v2);
        $vis3->avaliarPorc(50);
        print_r($vis3);
    ?>
    </pre>
</body>
</html>