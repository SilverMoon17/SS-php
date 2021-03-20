<?php 
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    function alert($msg)
    {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }

    if(mb_strlen($login) < 5 || mb_strlen($login) > 50) {
        alert("Длина логина не должна быть меньше 5 символов и больше 50!");
        exit();
    } else if(mb_strlen($username) < 3 || mb_strlen($username) > 50) {
        alert("Длина имени пользователя не должна быть меньше 5 символов и больше 50!");
        exit();
    } else if(mb_strlen($pass) < 5 || mb_strlen($pass) > 15) {
        alert("Недопустимая длина пароля (от 5 до 15 символов)!");
        exit();
    }
    $pass = md5($pass."dfsfrtfdkoutbkvhcysbIITUR");


    $mysql = new mysqli('ss', 'mysql', 'mysql', 'register-db');
    $result = $mysql -> query("SELECT * FROM `users` WHERE `login` = 
    '$login'");
    $exst_login = $result->fetch_assoc();
    if ($exst_login['login'] == $login) {
        alert("Такой пользователь уже существует!");
        exit();
    } else {
        $mysql -> query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES ('$login', '$pass', '$username')");
    }

    $mysql -> close();
    

    header("Location: ../registration-form.php");
?>