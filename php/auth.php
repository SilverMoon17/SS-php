<?php 
    session_start();
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);


    $pass = md5($pass."dfsfrtfdkoutbkvhcysbIITUR");

    require_once('connect.php');
    
    $result = mysqli_query($mysql,"SELECT * FROM `users` WHERE (`login` = 
    '$login' OR `email` = '$email') AND `pass` = '$pass'");
    $user = mysqli_fetch_assoc($result);


    if (count($user) == 0) {
        $_SESSION['error'] = "Пользователь не найден";
        header ("Location: ../login.php");
        exit();
    }    
    if (count($user) != 0) {
        setcookie('username', $user['name'], time() + 60*60*45, "/");
        $_SESSION['user'] = [
            "id" => $user['id'],
            "login" => $user['login'],
            "name" => $user['name'],
            "avatar" => $user['avatar'],
            "email" => $user['email']
        ];
    }
    
    header ("Location: ../cabinet.php");
    $mysql->close();

?>