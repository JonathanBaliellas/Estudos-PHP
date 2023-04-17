<?php
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $profissao = $_POST['profissao'];
    $salario = $_POST['salario'];

    echo "<h1>$nome</h1>
    <p>Sua idade é $idade anos. Você é $profissao. Seu salário é de R$ $salario.</p>
    <p>Que tal?</p>";
?>