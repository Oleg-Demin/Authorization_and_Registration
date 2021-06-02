<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $сonfirm = $_POST['сonfirm'];

    if ($password === $сonfirm ) {
        
        if ($login != "" and $name != "" and $password != "") {
            $password = md5($password);

            $query = "INSERT INTO users (login, password, name) VALUES ('$login', '$password', '$name')";
            pg_query($connect, $query);

            $_SESSION['message'] = 'Регистрация прошла успешно!';
            header('Location: ../index.php');
        } else {
            $_SESSION['message'] = 'Пустые строки!';
            header('Location: ../register.php');
        }
        
    } else {
        $_SESSION['message'] = 'Пароли не совпадают!';
        header('Location: ../register.php');
    }
?>