<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 6 - Encapsulamento</title>
</head>
<body>
    <h1>Controle Remoto</h1>
    <pre>
        <?php
            require_once 'ControleRemoto.php';
            $c = new ControleRemoto;
            $c->ligar();
            for($i=0;$i<5;$i++){$c->menosVolume();}
            $c->play();
            $c->abrirMenu();
        ?>
    </pre>
</body>
</html>