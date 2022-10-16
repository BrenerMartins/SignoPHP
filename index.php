<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&family=Outfit&display=swap" rel="stylesheet">
    <title>Descubra seu Signo</title>
</head>
<body>
    <form action="signs.php" method="post">
        <label for="birthdayDate">Insira sua data de Aniversário</label>
        <input class="date" type="date" name="birthdayDate" id="birthdayDate" required>
        <input class="btn" type="submit" name="btn" value="Enviar">
    </form>
</body>
</html>