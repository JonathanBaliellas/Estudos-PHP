<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo</title>
</head>
<body>
    <pre>
    <?php
        //IMPORTAÇÕES
        require_once 'Classes/Arara.php';
        require_once 'Classes/Beta.php';
        require_once 'Classes/Cachorro.php';
        require_once 'Classes/Canguru.php';
        require_once 'Classes/Cobra.php';
        require_once 'Classes/Tartaruga.php';

        //PROGRAMA PRINCIPAL
        arara();
        beta();
        cachorro();
        canguru();
        cobra();
        tartaruga();

        function arara(){
            $a = new Arara();
            $a->setPeso(7.3);
            $a->setIdade(2);
            $a->setMembros(4);
            $a->setCorPena('Vermelha');
            print_r($a);
    
            $a->locomover();
            $a->emitirSom();
            $a->imitarSom();
            $a->alimentar();
            $a->fazerNinho();
            echo "<br><p>---------</p><br>";
        }

        function beta(){
            $b = new Beta();
            $b->setPeso(0.3);
            $b->setIdade(1);
            $b->setMembros(1);
            $b->setCorEscama('Azul');
            print_r($b);
    
            $b->locomover();
            $b->emitirSom();
            $b->alimentar();
            $b->atacar();
            $b->soltarBolha();
            echo "<br><p>---------</p><br>";
        }

        function cachorro(){
            $c = new Cachorro();
            $c->setPeso(15);
            $c->setIdade(5);
            $c->setMembros(4);
            $c->setCorPelo('Caramelo');
            print_r($c);

            $c->locomover();
            $c->alimentar();
            $c->emitirSom();
            $c->abanarRabo();
            $c->enterrarOsso();
            echo "<br><p>---------</p><br>";
        }

        function canguru(){
            $c = new Canguru();
            $c->setPeso(25);
            $c->setIdade(12);
            $c->setMembros(4);
            $c->setCorPelo('Marrom');
            print_r($c);

            $c->locomover();
            $c->alimentar();
            $c->emitirSom();
            $c->usarBolsa();
            echo "<br><p>---------</p><br>";
        }

        function cobra(){
            $c = new Cobra();
            $c->setPeso(5);
            $c->setIdade(3);
            $c->setMembros(0);
            $c->setCorEscama('Verde');
            print_r($c);

            $c->locomover();
            $c->alimentar();
            $c->emitirSom();
            $c->envenenar();
            echo "<br><p>---------</p><br>";
        }

        function tartaruga(){
            $t = new Tartaruga();
            $t->setPeso(2);
            $t->setIdade(120);
            $t->setMembros(4);
            $t->setCorEscama('Marrom');
            print_r($t);

            $t->locomover();
            $t->alimentar();
            $t->emitirSom();
            $t->esconder();
            echo "<br><p>---------</p><br>";
        }
    ?>
    </pre>
</body>
</html>