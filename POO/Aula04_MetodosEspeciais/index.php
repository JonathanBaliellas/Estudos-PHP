<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métodos Getter, Setter e Construct</title>
    <style>
        body{
            background: black;
            color: green;
            font-size: 1.5em;            
        }
    </style>
</head>
<body>
    <h1>Criando Objetos com Métodos <i>Getter</i>, <i>Setter</i> e <i>Construct</i></h1>
    <pre>
        <?php 
            require_once "ClasseTeclado.php";
            $teclado1 = new Teclado("Havit","ABNT","Mecânico","USB");
            print_r($teclado1);
            $teclado1->conectar();
            $teclado1->digitar();
            $teclado1->desconectar();
            $teclado1->apagar();
            $teclado1->conectar();
            $teclado1->apagar();
        ?>
    </pre>
</body>
</html>