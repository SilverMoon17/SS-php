<?php session_start()?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Вход</title>
</head>
<body>
    <?php require 'template/header.php';?>
    <main style="margin-bottom: 626px;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                <form method="post" action="php/auth.php" class="d-flex flex-column align-items-center justify-content-center" style="position:relative;">
                    <h3 class = "title login-title">Вход</h3>
                    <label class="input-title">Логин или адрес электронной почты<input type = "text" class="input-form login" name="login" id="login" placeholder="Введите ваш логин или e-mail" onkeyup='checkParams()'></label>
                    <label class="input-title">Пароль<input type = "password" class="input-form password" name="pass" id="pass" placeholder="Введите ваш пароль" autocomplete="off" onkeyup='checkParams()'></label>
                    <?php
                        if ($_SESSION['error']) {
                            echo '<p class="error">'.$_SESSION['error'].'</p>';
                        } 
                        unset($_SESSION['error'])
                    ?>
                    <button type="submit" name="send" class="btn login-button disabled" disabled>Войти</button>
                    <p class="reg-off">Нет аккаунта? - <a class = "link-offer" href = "registration-form.php">Зарегистрируйтесь</a></p>
                </form>
              </div>  
            </div>
        </div>
    </main>
    <?php require 'template/footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script type='text/javascript'>
        function checkParams() {
            var login = $('.login').val();
            var password = $('.password').val();
            

            if (login.length != 0 && login.length < 50 && login.length >= 4 && password.length >= 5) {
                $('.btn').removeAttr('disabled');
                $('.btn').removeClass('disabled');
            } else {
                $('.btn').attr('disabled','disabled');
                $('.btn').addClass('disabled');
            }
        }
    </script>
    <script src="js/main.js"></script>
</body>
</html>