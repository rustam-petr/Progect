<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- https://cdnjs.com/ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous"/>
    <!--подключение шрифта-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&family=Roboto+Condensed&display=swap"
          rel="stylesheet">
    <!--свои стили-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="container book">

    <?php
    include "function.php";

    $email = $_POST["email"];
    $password = $_POST["password"];

    $cond1 = preg_match("/(admin)@(rabota)\.ru/iu", $_POST["email"]);
    $cond2 = preg_match("/[1111]+/iu", $_POST["password"]);


    $string = file_get_contents("registration.txt");
    $string1 = ltrim($string, $characters = '\n');
    $keywords = preg_split("/[ \d\n]+/iu", $string1);

    if ($cond1 && $cond2) {
        $array = json_decode(file_get_contents("opros.json"), true);

        echo
        "<table class='table table-bordered table-success table-hover'>";
        echo
        "<th> Email посетителя</th>
                     <th>Где вы предпочитаете ремонтировать свой автомобиль?</th>
                     <th>Прогриваете ли вы двигатель машины перед поездкой?</th>
                     <th>Пересядете ли вы на общественный транспорт, если он станет бесплатным?</th>
                     <th>Какому автомобилю вы отдадите предпочтение? </th>
                     <th>Дата и Время </th>";

        for ($i = 0; $i < count($array); $i++) {
            echo '<tr class="table-light">
                          <td>'
                .$keywords[$i].
                '</td> <td>'
                . $array[$i]["msg1"] .
                '</td> <td>'
                . $array[$i]["msg2"] .
                '</td><td>'
                . $array[$i]["msg3"] .
                '</td><td>'
                . $array[$i]["msg4"] .
                '</td><td>'
                . dateFormat($array[$i]["date"]) .
                '</td></tr>';
        }

        echo "</table>";
    }

    ?>

</div>
<!-- Bootstrap: js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>

</html>