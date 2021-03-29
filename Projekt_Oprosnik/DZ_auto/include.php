<?php

$condition1 = preg_match("/[\w\d\+_]+@[\w\d]{4,}\.[\w]{2,}/iu", $_POST["Name"]);
$condition2 = preg_match("/[\w\d]+/iu", $_POST["Password"]);
$read = preg_replace("/[ \n]{1,}/iu", "", file_get_contents("registration.txt"));

$write1 = strripos($read, preg_replace("/[ ]{1,}/iu", "", $_POST["Name"]));
$write2 = strripos($read, preg_replace("/[ ]{1,}/iu", "", $_POST["Password"]));

if ($write1 === false && $write2 === false) {
    if ($condition1 && $condition2) {

        echo '<h3 class="registr__title reg">Вы успешно прошли регистрацию</h3>';

        file_put_contents("registration.txt", $_POST["Name"] . "\n" . $_POST["Password"] . "\n", FILE_APPEND);

        echo
        '<form class="registr__form" action="json.php" method="post">
                        <h3 class="registr__title">Пройти опрос</h3><br>
                        <p class="registr__text"><mark>Где вы предпочитаете ремонтировать свой автомобиль?
                        <i class="fas fa-charging-station"></i></mark></p>
                        <input class="registr__input" type="text" name="1" placeholder="Ответ" tabindex="1" autofocus>
                        <p class="registr__text"><mark>Прогриваете ли вы двигатель машины перед поездкой? 
                        <i class="fas fa-car-battery"></i></mark></p>
                        <input class="registr__input" type="text" name="2" placeholder="Ответ" tabindex="2">
                        <p class="registr__text"><mark>Пересядете ли вы на общественный транспорт, если он станет бесплатным?
                         <i class="fas fa-hand-holding-usd"></i></mark></p>
                        <input class="registr__input" type="text" name="3" placeholder="Ответ" tabindex="3">
                        <p class="registr__text"><mark>Какому автомобилю вы отдадите предпочтение? 
                        <i class="fas fa-truck-pickup"></i></mark></p>
                        <input class="registr__input" type="text" name="4" placeholder="Ответ" tabindex="4">
                        <button class="registr__btn" type="submit">Отправить</button>
                    </form>';
    } else {
        echo
        ' <h3 class="registr__title reg">Введите корректные данные</h3>
          <a class="application-btn" href="main.php">Пройти регистрацию заново <i class="fas fa-reply-all"></i></a>';
    }
} else {
        echo '<h3 class="registr__title reg">Вы уже регистрировались</h3>
          <a class="application-btn" href="main.php">Пройти регистрацию заново <i class="fas fa-reply-all"></i></a>';
}
