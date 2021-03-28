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
        echo '<form class="registr__form" action="json.php" method="post">
                        <h3 class="registr__title reg">Пройди опрос</h3>
                        <p class="registr__text">Где вы предпочитаете ремонтировать свой автомобиль?</p>
                        <input class="registr__input" type="text" name="1" placeholder="Ответ" tabindex="1" autofocus>
                        <p class="registr__text">Прогриваете ли вы двигатель машины перед поездкой?</p>
                        <input class="registr__input" type="text" name="2" placeholder="Ответ" tabindex="2">
                        <p class="registr__text">Пересядете ли вы на общественный транспорт, если он станет бесплатным?</p>
                        <input class="registr__input" type="text" name="3" placeholder="Ответ" tabindex="2">
                        <p class="registr__text">Какому автомобилю вы отдадите предпочтение?</p>
                        <input class="registr__input" type="text" name="4" placeholder="Ответ" tabindex="2">
                        <button class="registr__btn" type="submit" tabindex="3">Отправить</button>
                    </form>';

    } else {
        echo "Введите корректные данные";
    }
} else {
    echo "Вы уже регистрировались";
}
?>