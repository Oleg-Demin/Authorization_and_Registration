<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Регистрация</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-xxl">
                <a class="navbar-brand" href="#">Тестовая работа (test.comp)</a>
                <form action="http://test.comp/index.php" method="post">
                    <button type="submit"
                            class="btn btn-warning">Перейти к авторизации</button>
                </form>
            </div>
        </nav>
    </header>

    <section>

        <h2>Регистрация</h2>
        
        <!-- ФОРМАТ РЕГИСТРАЦИИ -->
        <form action="vendor/signup.php" method="post">
            <input type="text"
                    class="form-control"
                    name="login"
                    placeholder="login">
            <input type="text"
                    class="form-control"
                    name="name"
                    placeholder="name">
            <input type="password"
                    class="form-control"
                    name="password"
                    placeholder="password">
            <input type="password"
                    class="form-control"
                    name="сonfirm"
                    placeholder="password confirmation">
            <button type="submit"
                    class="btn btn-primary">Регистрация</button>
            <?php
                if ($_SESSION['message']) {
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);
            ?>
        </form>

    </section>

</body>

</html>
