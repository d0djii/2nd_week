<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $connectMySQL = new mysqli('localhost', 'root', '', 'wordphp');

    $login = $_POST['login'];
    $password = $_POST['password'];

    $query = $connectMySQL->prepare("SELECT * FROM users WHERE login=? AND password=?");
    $query->bind_param("ss", $login, $password);
    $query->execute();

    $result = $query->get_result();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>
<body>

    <div class="container">
        <div class="img">
            <img src="assets/img/user.png" alt="">
            <h1>Авторизация</h1>
        </div>

        <div class="input-container">
            <input type="name" id="nameInput" placeholder="&nbsp;">
            <label for="nameInput">Логин</label>
        </div>    

        <div class="input-container">
            <input type="password" id="nameInput" placeholder="&nbsp;">
            <label for="nameInput">Пароль</label>
        </div>

        <div class="form_button">
            <button>Войти</button>
        </div>

        <a class="link" href="register.php">
            <p>
                Регистрация
            </p>
        </a>

        <a class="link" href="list.php">
            <p>
                Я студент
            </p>
        </a>
    </div>


</body>
</html>