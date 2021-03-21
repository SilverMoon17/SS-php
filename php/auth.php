<?php 
    session_start();
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);


    $pass = md5($pass."dfsfrtfdkoutbkvhcysbIITUR");

    require_once('connect.php');
    
    $result = $mysql -> query("SELECT * FROM `users` WHERE `login` = 
    '$login' AND `pass` = '$pass'");
    $user = mysqli_fetch_assoc($result);

    $result_elogin = $mysql -> query("SELECT * FROM `users` WHERE `email` = 
    '$email' AND `pass` = '$pass'");
    $elogin = $result_elogin->fetch_assoc();


    if (count($user) == 0 and count($elogin) == 0) {
        $_SESSION['error'] = "Пользователь не найден";
        header ("Location: ../login.php");
        exit();
    } 
    if (count($elogin) != 0) {
        setcookie('username', $elogin['name'], time() + 60*60*45, "/");
        $_SESSION['user'] = [
            "id" => $user['id'],
            "login" => $user['login'],
            "name" => $user['name'],
            "avatar" => $user['avatar'],
            "email" => $user['email']
        ];
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