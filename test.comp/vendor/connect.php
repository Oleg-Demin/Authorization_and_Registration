<?php
    $connect_string = "host=localhost port=5432 dbname=test user=user password=123";
    $connect = pg_connect($connect_string);
    // $query = "select * from news order by index desc";
    // $news = pg_query($connect, $query);
    // $news = pg_fetch_all($news); 
    // pg_close($dbconnect);
    
    // Проверка на соединение с базой данных (или на мою криворукость)
    if (!$connect) {
        $_SESSION['message'] = 'Ошибка подключения к базе данных!';
        header('Location: ../register.php');
    }
?>