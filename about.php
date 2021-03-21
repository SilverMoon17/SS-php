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
    <title>Контакты</title>
</head>
<body>
    <?php require 'template/header.php' ?>
    <main style="margin-bottom: 626px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="title contact-title">Предложение по улучшению</h3>
                    <form method="post" action="php/email-send.php" class = "d-flex flex-column align-items-center">
                        <input class="contact-email form-control" type="email" name="email" placeholder="Введите ваш e-mail" autocomplete="off" onkeyup='checkParams()'>
                        <textarea name="message" class = "contact-message" placeholder="Введите ваше сообщение" onkeyup='checkParams()'></textarea>
                        <div style="position:relative;"><button type="submit" name="send" class="send-button disabled" disabled>Отправить</button></div>
                    </form> 
                </div>     
            </div>
        </div>
    </main>
    <?php require 'template/footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script type='text/javascript'>
        function checkParams() {
            var email = $('.contact-email').val();
            var message = $('.contact-message').val();
            
            function validateEmail(email) 
            {
                var re = /\S+@\S+\.\S+/;
                return re.test(email);
            }

            if (email.length != 0 && message.length > 10 && validateEmail(email)) {
                $('.send-button').removeAttr('disabled');
                $('.send-button').removeClass('disabled');
            } else {
                $('.send-button').attr('disabled','disabled');
                $('.send-button').addClass('disabled');
            }
        }
    </script>
    <script src="js/main.js"></script>
</body>
</html>