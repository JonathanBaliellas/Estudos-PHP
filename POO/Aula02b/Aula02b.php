<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caneta</title>
</head>
<body>
    <?php
        require_once "ClasseCaneta.php";
        $c1 = new Caneta;
        $c1->cor = 'Azul';
        $c1->ponta = 0.5;
        $c1->carga = 1;
        $c1->tampada = true;

        $c2 = new Caneta;
        $c2->cor = 'Vermelha';
        $c2->ponta = 0.7;
        $c2->carga = 0.8;
        $c2->tampada = false;

    ?>

    <h1><?php echo "Caneta $c1->cor"; ?></h1>
    <?php
        $c1->destampar();
        $c1->escrever();

    ?>

    <h1><?php echo "Caneta $c2->cor"; ?></h1>
    <?php
        $c2->tampar();
        $c2->escrever();
    ?>
</body>
</html>