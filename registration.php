<?php
require_once 'php/db.php';
$planet_id = $_GET['id'];
$planet = mysqli_query($connection, "SELECT * FROM `planet` WHERE `id` = '$planet_id'");
$planet = mysqli_fetch_assoc($planet);

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оформление</title>
    <link rel="stylesheet" href="scss/header-footer.css">
    <link rel="stylesheet" href="scss/registration.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;700;800&family=Roboto:wght@100&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="content">
        <div class="wrapper">
        <?php require_once "php/blocks/header.php" ?>

            <div class="main-content">
                <div class="container">
                    <div class="heading">
                        <div class="text">
                            Оформление
                        </div>
                    </div>

                    <div class="planet-cart">
                        <div class="information">
                            <div class="under-text">
                                <?=$planet['name']?>
                            </div>
                            <div class="planeta">
                                <img src="/img/planets_image/<?=$planet['planet_image']?>.png" alt="">
                            </div>
                            <form action="">
                                <div class="input">
                                    <input type="text" placeholder="Имя">
                                    <input type="text" placeholder="Фамилия">
                                    <input type="text" placeholder="Количество людей">

                                    <div class="radio">
                                        <div class="button">1</div>
                                        <div class="button">2</div>
                                        <div class="button">3</div>
                                        <div class="button">4</div>
                                    </div>

                                    <input type="text" placeholder="Номер телефона">
                                </div>
                                <!-- <div class="checkbox">
                                    <input type="checkbox" class="custom-checkbox" name="checkbox" id="checkbox"><label
                                        for="checkbox">Согласен на
                                        обработку и предоставления своих данных </label>

                                </div> -->

                                <label class="wrapper-login01">
                                    <input class="checkbox-login01" type="checkbox">
                                    <span class="style-login01"></span>
                                    <span class="text-login01">Согласен на
                                        обработку и предоставления своих данных</span>
                                </label>
                            </form>

                            <div class="bottom_text">
                                <p>При заказе вы оставляете нам свои данные, мы с вами свяжемся, проведем обследования,
                                    необходимые для путешествия на планету “Марс”, и после заполним все необходимые
                                    документы.
                                </p>
                            </div>

                            <div class="button-for-cart-planet">
                                <div class="text-for-button">
                                    Отправиться в тур
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>




            <?php require_once "php/blocks/footer.php" ?>

        </div>
    </div>


    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>