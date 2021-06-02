<?php
    session_start();
    if (!$_SESSION['user']) {
        header('Location: /');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
    <title>login</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-xxl">
                <a class="navbar-brand" href="#">Тестовая работа (test.comp)</a>
                <form action="http://test.comp/vendor/logout.php" method="post">
                    <button type="submit"
                        class="btn btn-warning">Выход</button>
                    </form>
            </div>
        </nav>
    </header>

    <h2>Ура вы вошли!</h2>

    <section>
        <h1>Приветствуем пользователь:</h1>
        <h1 class="name">
            <?= $_SESSION['user']['name'] ?>
        </h1>
    </section>

</body>

</html>
