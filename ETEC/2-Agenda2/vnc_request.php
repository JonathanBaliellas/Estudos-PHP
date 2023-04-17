<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Você no Comando</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form action="vnc_acao.php" method="post" id="form1" name="form1">
        Nome completo: 
        <input type="text" name="nome" id="nome"><br>
        
        Idade:
        <input type="number" name="idade" id="idade" min="0" max="150"><br>

        Profissão:
        <input type="text" name="profissao" id="profissao"><br>

        Salário:
        <input type="number" name="salario" id="salario" default="0" min="0" step="0.01"><br><br>

        <input type="submit" value="Cadastrar" name="cadastrar" id="cadastrar">
    </form>
</body>
</html>