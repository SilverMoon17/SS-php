<?php 
    session_start();
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);


    $pass = md5($pass."dfsfrtfdkoutbkvhcysbIITUR");

    require_once('connect.php');
    
    $result = $mysql -> query("SELECT * FROM `users` WHERE `login` = 
    '$login' AND `pass` = '$pass'");

    $user = $result->fetch_assoc();

    if (count($user) == 0) {
        $_SESSION['error'] = "Пользователь не найден";
        header ("Location: ../login.php");
        exit();
    }

    setcookie('username', $user['name'], time() + 60*60*45, "/");
    header ("Location:/");
    $mysql->close();

?>