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
        <form action="//httpbin.org/post" method="post">

            <div class="form1">
            <label for="name">Имя</label>
            <input type="text" name="name" placeholder="Имя" required>
            <label for="email">Почта</label>
            <input type="email" name="email" placeholder="Почта" required>
            </div>

            <div class="form2">
            <label for="problem">Жалоба</label>
            <input type="radio" name="problem">
            <br>
            <label for="problem">Предложение</label>
            <input type="radio" name="problem">
            <br>
            <label for="problem">Благодарность</label>
            <input type="radio" name="problem">
            </div>

            <div class="form3">
            <label for="message">Текст обращения</label>
            <input type="text" name="message">
            </div>

            <div class="form4">
            <label for="response">Email</label>
            <input type="checkbox" id="response" name="response">
            <br>
            <label for="response">SMS</label>
            <input type="checkbox" id="response" name="response">
            </div>

            <input class="btn-Summit" type="submit" value="Submit">

        </form>

        <a class="btn-link" href="./second.php">Next page</a>

    </main>
    <footer>
        <p>Задание для самостоятельно работы</p>
    </footer>
</body>
</html>