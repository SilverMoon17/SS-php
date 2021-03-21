<?php 
    session_start();
?>
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
    <title>Регистрация</title>
</head>
<body>
    <?php require 'template/header.php';?>
    <main style="margin-bottom: 626px;">
    <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                <form method="post" action="php/reg.php" enctype="multipart/form-data" class="d-flex flex-column align-items-center justify-content-center" style="position:relative;">
                    <h3 class = "title login-title">Регистрация</h3>
                    <label class="input-title">Логин<input type = "text" class="input-form login" name="login" id="login" placeholder="Введите ваш логин" autocomplete="off" onkeyup='checkParams()'></label>
                    <label class="input-title">Имя пользователя<input type = "text" class="input-form username" name="username" id="username" placeholder="Введите имя пользователя" autocomplete="off" onkeyup='checkParams()'></label>
                    <label class="input-title">E-mail<input type = "email" class="input-form email" name="email" id="email" placeholder="Введите ваш email" autocomplete="off" onkeyup='checkParams()'></label>
                    <label class="input-title">Пароль<input type = "text" class="input-form password" name="pass" id="pass" placeholder="Введите ваш пароль" autocomplete="off" onkeyup='checkParams()'></label>
                    <label class="input-title">Подтверждение пароля<input type = "text" class="input-form pass_confirm" name="pass_confirm" id="pass_confirm" placeholder="Подтвердите ваш пароль" autocomplete="off" onkeyup='checkParams()'></label>
                    <label class="input-title" style="max-width:325px;">Загрузите аватар профиля<input type = "file" class="file" style="margin-top: 4px;" name="avatar" id="file" onkeyup='checkParams()'></label>
                    <?php
                        if ($_SESSION['error']) {
                            echo '<p class="error">'.$_SESSION['error'].'</p>';
                        } 
                        unset($_SESSION['error']);
                    ?>
                    <div><p class="reg-off">Уже есть аккаунт? - <a class = "link-offer" href = "login.php">Войти</a></p><button type="submit" name="send" class="btn registration-button disabled" disabled>Регистрация</button></div>
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
            var username = $('.username').val();
            var email = $('.email').val();
            var pass_confirm = $('.pass_confirm').val();

            function validateEmail(email) 
            {
                var re = /\S+@\S+\.\S+/;
                return re.test(email);
            }
            

            if (login.length != 0 && login.length >= 5 && password.length >= 5 && pass_confirm.length >= 5 && username.length >=3 && validateEmail(email)) {
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