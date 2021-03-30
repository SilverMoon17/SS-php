<?php 
    $mysql = new mysqli('ss', 'mysql', 'mysql', 'register-db'); 
    if (mysqli_connect_errno()) {
        printf("Не удалось подключиться к базе данных: %s\n", mysqli_connect_error());
        exit();
    }
?>