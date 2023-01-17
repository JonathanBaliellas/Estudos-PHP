<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>
    <pre>
        <?php
            require_once "classe_Visitante.php";
            $p1 = new Visitante();
            $p1->setNome("João");
            $p1->setIdade(30);
            print_r($p1);
            echo "<br>";
            $p1->fazerAniversario();
            print_r($p1);
        ?>
    </pre>
</body>
</html>