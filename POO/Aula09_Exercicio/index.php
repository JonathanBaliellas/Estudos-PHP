<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 9 - Exercícios</title>
    <style>
        body{
            /* background-color: black;
            color: green; */
            margin: 1em;
        }
    </style>
</head>
<body>
    <h1>Aula 9 - Exercício Relacionamento de Classes</h1>
    <?php
        require_once 'Classe_Pessoa.php';
        require_once 'Classe_Livro.php';

        //Objetos
        $pessoa = [
            new Pessoa('Jontz','31','M'),
            new Pessoa('Jeny','12','F')
        ];

        $livro = [
            new Livro('O Silmarillion','Tolkien',350,$pessoa[0]),
            new Livro('1985','George Orwell',400,$pessoa[0]),
            new Livro('O Hobbit','Tolkien',320,$pessoa[1])
        ];

        //Programa
        $pessoa[1]->fazerAniversario();
        $livro[0]->abrir();
        $livro[0]->folhear();
        $livro[0]->avancarPag();
        for($i=0;$i<10;$i++){
            $livro[0]->voltarPag();
        }
        $livro[0]->fechar();
        $livro[0]->detalhes();
    ?>
</body>
</html>