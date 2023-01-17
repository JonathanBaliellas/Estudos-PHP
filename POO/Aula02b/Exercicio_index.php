<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício POO - Aula 2</title>
</head>
<body>
    <?php
        require_once "Exercicio_ClasseMonitorAudio.php";
        $monitor1 = new MonitorAudio;
        $monitor1->modelo = 'PreSonus';
        $monitor1->woofer = 3.5;
        $monitor1->tweeter = 1.5;
        // $monitor1->ligado = false;
        // $monitor1->auxIn = false;
        // $monitor1->phoneOut = false;
        // $monitor1->volume = 0.5;
    ?>

    <h1>Monitor: <?php echo $monitor1->modelo; ?></h1>
    
    <?php
        echo "<pre>";
        print_r($monitor1);
        echo "</pre>";
        $monitor1->ligar();
        for($i=0;$i<10;$i++){
            $monitor1->aumentarVol();
        }
    ?>
    
</body>
</html>