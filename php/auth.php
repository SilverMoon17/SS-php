<?php 
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    function alert($msg)
    {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }


    $pass = md5($pass."dfsfrtfdkoutbkvhcysbIITUR");

    $mysql = new mysqli('ss', 'mysql', 'mysql', 'register-db');
    
    $result = $mysql -> query("SELECT * FROM `users` WHERE `login` = 
    '$login' AND `pass` = '$pass'");

    $user = $result->fetch_assoc();

    if (count($user) == 0) {
        alert("Пользователь не найден!");
        exit();
    }

    setcookie('username', $user['name'], time() + 60*60*45, "/");
    
    header ("Location: /");

    $mysql->close();

?>