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
    <?php require 'template/header.php' ?>
    <?php
    $email = $_POST['email'];
    $message = $_POST['message'];
    $message = wordwrap($message, 70, "\r\n");
    function alert($msg)
    {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
    
    $err = '';
    if (trim($email) == '') {
        $err = "Введите ваш e-mail";
    } else if (strlen(trim($message)) < 10 ) {
        $err = "Длина сообщения должна быть больше 10 символов!";
    }

    if ($err != '') {
        alert($err);
        exit;
    }

    $subject = "=?utf-8?B?".base64_encode("Контактная форма")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/plain.charset=utf-8\r\n";

    mail('test@gmail.com', $subject, $message, $headers);
    
    ?>
    <main class="main" style="margin-bottom:560px">
        <h1 style="text-align: center; margin-top:30px"><i>Спасибо за ваш отзыв!</i></h1>
    </main>
    <?php require 'template/footer.php' ?>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</body>
</html>