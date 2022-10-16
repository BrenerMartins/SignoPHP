<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/section.css">
    <title>Signo</title>
</head>
<body>
   <?php
        $xmlPath = "xml/data.xml";
        $xml = simplexml_load_file($xmlPath);

       $date = $_POST['birthdayDate'];
       $birthday = date('d/m', strtotime($date));
       $day = date('d', strtotime($date));
       $month = date('m', strtotime($date));

       foreach($xml->children() as $signo) {
            $startDate = $signo->dataInicio;
            $endDate = $signo->dataFim;
            $sign = $signo->signoNome;

            if (($day >= 21 && $month == 3 || $day <= 20 && $month == 4) && $sign == 'Áries') {

                echo "
                    <section class='sign'>
                        <h1 class='title'>$signo->signoNome </h1>
                        <p class='description'>$signo->descricao </p>
                    </section>
                ";
                break;
            } elseif (($day >= 20 && $month == 4 || $day <= 20 && $month == 5) && $sign == 'Touro') {
                echo "
                    <section class='sign'>
                        <h1 class='title'>$signo->signoNome </h1>
                        <p class='description'>$signo->descricao </p>
                    </section>
                ";
                break;
            } elseif (($day >= 21 && $month == 5 || $day <= 21 && $month == 6) && $sign == 'Gêmeos') {
                echo "
                    <section class='sign'>
                        <h1 class='title'>$signo->signoNome </h1>
                        <p class='description'>$signo->descricao </p>
                    </section>
                ";
                break;
            } elseif (($day >= 22 && $month == 6 || $day <= 22 && $month == 7) && $sign == 'Câncer') {
                echo "
                    <section class='sign'>
                        <h1 class='title'>$signo->signoNome </h1>
                        <p class='description'>$signo->descricao </p>
                    </section>
                ";
                break;
            } elseif (($day >= 23 && $month == 7 || $day <= 22 && $month == 8) && $sign == 'Leão') {
                echo "
                    <section class='sign'>
                        <h1 class='title'>$signo->signoNome </h1>
                        <p class='description'>$signo->descricao </p>
                    </section>
                ";
                break;
            } elseif (($day >= 23 && $month == 8 || $day <= 22 && $month == 9) && $sign == 'Virgem') {
                echo "
                    <section class='sign'>
                        <h1 class='title'>$signo->signoNome </h1>
                        <p class='description'>$signo->descricao </p>
                    </section>
                ";
                break;
            } elseif (($day >= 23 && $month == 9 || $day <= 22 && $month == 10) && $sign == 'Libra') {
                echo "
                    <section class='sign'>
                        <h1 class='title'>$signo->signoNome </h1>
                        <p class='description'>$signo->descricao </p>
                    </section>
                ";
                break;
            } elseif (($day >= 23 && $month == 10 || $day <= 21 && $month == 11) && $sign == 'Escorpião') {
                echo "
                    <section class='sign'>
                        <h1 class='title'>$signo->signoNome </h1>
                        <p class='description'>$signo->descricao </p>
                    </section>
                ";
                break;
            } elseif (($day >= 22 && $month == 11 || $day <= 21 && $month == 12) && $sign == 'Sagitário') {
                echo "
                    <section class='sign'>
                        <h1 class='title'>$signo->signoNome </h1>
                        <p class='description'>$signo->descricao </p>
                    </section>
                ";
                break;
            } elseif (($day >= 22 && $month == 12 || $day <= 19 && $month == 1) && $sign == 'Capricórnio') {
                echo "
                    <section class='sign'>
                        <h1 class='title'>$signo->signoNome </h1>
                        <p class='description'>$signo->descricao </p>
                    </section>
                ";
                break;
            } elseif (($day >= 20 && $month == 1 || $day <= 18 && $month == 2) && $sign == 'Aquário') {
                echo "
                    <section class='sign'>
                        <h1 class='title'>$signo->signoNome </h1>
                        <p class='description'>$signo->descricao </p>
                    </section>
                ";
                break;
            } elseif (($day >= 19 && $month == 2 || $day <= 20 && $month == 3) && $sign == 'Peixes') {
                echo "
                    <section class='sign'>
                        <h1 class='title'>$signo->signoNome </h1>
                        <p class='description'>$signo->descricao </p>
                    </section>
                ";
                break;
            } else {
                echo "
                    <section class='sign'>
                        $birthday não encontrado! <br>
                        Você é um alienigena 👽  <br>
                    </section>
                ";
                break;
            }
       }
   ?>
</body>
</html>
