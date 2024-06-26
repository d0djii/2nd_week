<?php
session_start();
$_SESSION['id'] = '';


$errorMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('connection.php');

    $login = $_POST['login'];
    $password = $_POST['password'];

    $query = $conn->prepare("SELECT * FROM users WHERE login=? AND password=?");
    $query->bind_param("ss", $login, $password);
    $query->execute();

    $result = $query->get_result();

    if ($result->num_rows > 0) {
        // Успешная авторизация
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row["id"];
        $_SESSION['role'] = $row["role"];
        if($_SESSION['role'] == 'UGU') {
          header('Location: ./ugu.php');
          exit(); 
        }
        else if ($_SESSION['role'] == 'OPOP') {
          header('Location: ./opop.php');
          exit(); 
        }
        else if ($_SESSION['role'] == 'ADMIN') {
          header('Location: ./admin.php');
          exit(); 
        }
        else {
          header('Location: ./login.php');
          exit(); 
        }
        
    } else {
        $errorMsg = "Неверный логин или пароль";
    }
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

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <div class="input-container">
            <input type="text" id="loginInput" name="login" placeholder="&nbsp;" required>
            <label for="loginInput">Логин</label>
        </div>    

        <div class="input-container">
            <input type="password" id="passwordInput" name="password" placeholder="&nbsp;" required>
            <label for="passwordInput">Пароль</label>
        </div>  

        <div style="color: red; margin-bottom: 10px;"><?php echo $errorMsg; ?></div>

        <div class="form_button">
            <button type="submit">Войти</button>
        </div>

    </form>


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