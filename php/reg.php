<?php 
    session_start();
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $pass_confirm = filter_var(trim($_POST['pass_confirm']), FILTER_SANITIZE_STRING);


    if (mb_strlen($login) < 3 || mb_strlen($login) > 50) {
        $_SESSION['error']= "Длина логина не должна быть меньше 5 символов и больше 50!";
        header("Location: ../registration-form.php");
        exit();
    } else if (mb_strlen($username) < 3 || mb_strlen($username) > 50) {
        $_SESSION['error']= "Длина имени пользователя не должна быть меньше 5 символов и больше 50!";
        header("Location: ../registration-form.php");
        exit();
    } else if(mb_strlen($pass) < 5 || mb_strlen($pass) > 15) {
        $_SESSION['error']= "Недопустимая длина пароля (от 5 до 15 символов)!";
        header("Location: ../registration-form.php");
        exit();
    }
    $pass = md5($pass."dfsfrtfdkoutbkvhcysbIITUR");
    $pass_confirm = md5($pass_confirm."dfsfrtfdkoutbkvhcysbIITUR");

    require_once 'connect.php';
    
    $result_login = $mysql -> query("SELECT * FROM `users` WHERE `login` = 
    '$login'");
    $exst_login = $result_login->fetch_assoc();

    $result_email = $mysql -> query("SELECT * FROM `users` WHERE `email` = 
    '$email'");
    $exst_email = $result_email->fetch_assoc();


    if (mysqli_num_rows($result_login) != 0) {
        $_SESSION['error'] = 'Пользователь с таким логином уже существует';
        header("Location: ../registration-form.php");
        exit();
    } else if (mysqli_num_rows($result_email) != 0) {
        $_SESSION['error'] = 'Пользователь с таким e-mail уже существует';
        header("Location: ../registration-form.php");
        exit();
    } else if ($pass != $pass_confirm ) {
        $_SESSION['error'] = 'Пароли не совпадают';
        header("Location: ../registration-form.php");
        exit();
    }
    
    if ($_FILES['avatar']['name'] == '' ) {
        $path = '';
        $mysql -> query("INSERT INTO `users` (`login`, `pass`, `name`, `email`, `pass_confirm`, `avatar`) 
        VALUES ('$login', '$pass', '$username', '$email', '$pass_confirm', '$path')");
    } else {
        $path= 'uploads/' . time() . $_FILES['avatar']['name'];
        move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path);
        $mysql -> query("INSERT INTO `users` (`login`, `pass`, `name`, `email`, `pass_confirm`, `avatar`) 
        VALUES ('$login', '$pass', '$username', '$email', '$pass_confirm', '$path')");

    }
    
    $mysql -> close();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Регистрация прошла успешно!</title>
</head>
<body>
    <?php require '../template/header.php' ?>
    <main class="main" style="margin-bottom:597px">
        <h1 style="text-align: center; margin-top:30px;margin-bottom: 50px"><i>Регистрация прошла успешно!</i></h1>
        <p style="text-align: center;"><a href="../login.php" class="btn" style="padding: 10px 25px;">Войти</a></p>
    </main>
    <?php require '../template/footer.php' ?>
    <script src="../js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</body>
</html>