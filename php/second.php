<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <title>lab_php</title>
</head>
<body>
    <header>
        <nav>
            <div class="nav_lvl_1">
            <img class="logo" src="../img/top_sh.png">
                 <p class="name_student">Тулин Константин Александрович 221-323</p>
            </div>
            <div class="nav_lvl_2">
                <a href="../index.html">Главная</a>
                <a href="../php/lab_php1.php">lab 1</a>
                <a href="../php/form.php">lab 2</a>
                <a href="">lab 3</a>
                <a href="">lab 4</a>
                <a href="">lab 5</a>
            </div>
        </nav>
    </header>
    <main>
    <textarea style="height: 400px; width: 500px;">

    <?php
    $url = 'http://php.std-2226.ist.mospolytech.ru/php/form.php';
    print_r(get_headers($url));
    ?>

    </textarea>
        <a class="btn-link" href="../php/form.php">Назад</a>
    </main>
    <footer>
        <p>Задание для самостоятельно работы</p>
    </footer>
</body>
</html>