<?php
session_start();
$_SESSION['id'] = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['id'] = 'some_user_id'; 
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>

    <div class="container">
        <div class="img">
            <img src="assets/img/user.png" alt="">
            <h1>Регистрация</h1>
        </div>

        <form action="register.php" method="post">

            <div class="input-container">
                <input type="text" id="loginInput" name="login" placeholder="&nbsp;">
                <label for="loginInput">Логин</label>
            </div> 

            <div class="input-container">
                <input type="text" id="lastNameInput" name="lastName" placeholder="&nbsp;">
                <label for="lastNameInput">Фамилия</label>
            </div>

            <div class="input-container">
                <input type="text" id="firstNameInput" name="firstName" placeholder="&nbsp;">
                <label for="firstNameInput">Имя</label>
            </div>   

            <div class="input-container">
                <input type="text" id="middleNameInput" name="middleName" placeholder="&nbsp;">
                <label for="middleNameInput">Отчество</label>
            </div>    

            <div class="input-container">
                <input type="password" id="passwordInput" name="password" placeholder="&nbsp;">
                <label for="passwordInput">Пароль</label>
            </div>

            <div class="form_button">
                <button type="submit">Зарегистрироваться</button>
            </div>
        </form>

        <a class="link" href="#">
            <p>
                Вход
            </p>
        </a>
    </div>


</body>
</html>