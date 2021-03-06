<?php 
    session_start();
    $username = $_COOKIE['username'];
    if(mb_strlen($username) == 0) {
        unset($_SESSION['user']);
        header ("Location: /");
    }
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <title>Личный кабинет</title>
</head>
<body>
    <?php require 'template/header.php';?>
    <main style="margin-bottom: 626px;">
        <div class="container">
           <div class="row">
                <form class="mt-5">
                    <?php 
                    if ($_SESSION['user']['avatar'] != '') {
                        // echo '<img src="' . $_SESSION['user']['avatar'] . '" width="250px" height="250px" style="object-fit:cover;">';
                        echo '<a data-fancybox="avatar" class="avatar-image-link" href="' . $_SESSION['user']['avatar'] . '"><img src="' . $_SESSION['user']['avatar'] . '" class="avatar-image-cabinet" width="250px" height="250px" style="object-fit:cover;"></a>';
                    }
                    ?>
                    <h3>Ваш идентификатор: <?= $_SESSION['user']['id'] ?></h3>
                    <h3>Логин: <?= $_SESSION['user']['login'] ?></h3>
                    <h3>Имя пользователя: <?= $_SESSION['user']['name'] ?></h3>
                    <h3>E-mail: <?= $_SESSION['user']['email'] ?></h3>
                </form> 
           </div> 
        </div>
    </main>
    <?php require 'template/footer.php' ?>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</body>
</html>