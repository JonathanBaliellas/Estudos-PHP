<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Você no comando</title>
</head>
<body>
    <form action="action.php" method="post">
        <label for="txt_nome">Nome: </label>
        <input type="text" name="txt_nome" id="">
        <br>
        <label for="txt_sal">Salário: </label>
        <input type="number" name="txt_sal" id="" min="0" step="0.01">
        <br>
        <label for="txt_dep">Dependentes: </label>
        <input type="number" name="txt_dep" id="">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>