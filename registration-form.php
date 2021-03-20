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
    <title>SS</title>
</head>
<body>
    <?php require 'template/header.php';?>
    <main style="margin-bottom: 626px;">
    <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                <form method="post" action="auth.php" class="d-flex flex-column align-items-center justify-content-center" style="position:relative;">
                    <h3 class = "title login-title">Регистрация</h3>
                    <label class="input-title">Логин<input type = "text" class="input-form login" name="login" id="login" placeholder="Введите ваш логин" autocomplete="off"></label>
                    <label class="input-title">Имя пользователя<input type = "text" class="input-form username" name="username" id="username" placeholder="Введите имя пользователя" autocomplete="off"></label>
                    <label class="input-title">Пароль<input type = "text" class="input-form password" name="pass" id="pass" placeholder="Введите ваш пароль" autocomplete="off"></label>
                    <div style="position:relative;"><button type="submit" name="send" class="btn registration-button disabled" disabled>Регистрация</button></div>
                </form>
              </div>  
            </div>
        </div>
    </main>
    <?php require 'template/footer.php' ?>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</body>
</html>