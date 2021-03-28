<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body>
<?php
$email = $_POST["email"];
$password = $_POST["password"];

$cond1 = preg_match("/(admin)@(rabota)\.ru/iu", $_POST["email"]);
$cond2 = preg_match("/[1111]+/iu", $_POST["password"]);


if ($cond1 && $cond2) {
    $array = json_decode(file_get_contents("opros.json"), true);
    echo "<table class='table table-success table-striped'>";
    echo "
<th>Вопрос №1</th>
                     <th>Вопрос №2</th>
                     <th>Вопрос №3</th>
                     <th>Вопрос №4</th>
                     <th>Время прохождения опроса</th>";
    for ($i = 0; $i < count($array); $i++) {
        echo '<tr><td>'. $array[$i]["msg1"] . '</td> <td>' . $array[$i]["msg2"] . '</td><td>' .
            $array[$i]["msg3"] . '</td><td>' . $array[$i]["msg4"] .'</td><td>'. date("d F Y H:i:s"). '</td></tr>';
    }
    echo "</table>";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>



