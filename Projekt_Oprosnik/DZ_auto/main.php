<?php
$condition1 = preg_match("/[\w\d\+_]+@[\w\d]{4,}\.[\w]{2,}/iu", $_POST["Name"]);
$condition2 = preg_match("/[\w\d]+/iu", $_POST["Password"]);
$read = preg_replace("/[ \n]{1,}/iu", "", file_get_contents("registration.txt"));

$write1 = strripos($read, preg_replace("/[ ]{1,}/iu", "", $_POST["name"]));
$write2 = strripos($read, preg_replace("/[ ]{1,}/iu", "", $_POST["Password"]));
if ($write1 === false && $write2 === false) {
    if ($condition1 && $condition2) {
        echo "Вы успешно прошли регистрацию";
        file_put_contents("registration.txt", $_POST["Name"] . "\n" . $_POST["Password"] . "\n",
            FILE_APPEND);
    } else {
        echo "Введите корректные данные";
    }
} else {
    echo "Вы уже регистрировались";
}
