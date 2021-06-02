<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
    $check_user = pg_query($connect, $query);
    if (pg_num_rows($check_user) > 0) {

        $user = pg_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name']
        ];

        header('Location: ../profile.php');

    } else {
        $_SESSION['message'] = 'Неверный логин или пароль!';
        header('Location: ../index.php');
    }
?>

