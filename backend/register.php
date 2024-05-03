<?php
session_start();
$_SESSION['id'] = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Проверка заполненности полей
    if (!empty($_POST['login']) && !empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['middlename']) && !empty($_POST['password'])) {
        $login = $_POST['login'];
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $password = $_POST['password'];
        
        $loginPattern = '/^[a-zA-Z0-9]+$/';
        $namePattern = '/^[А-Яа-яЁё]+$/u';
        
        if (preg_match($loginPattern, $login) && preg_match($namePattern, $lastname) && preg_match($namePattern, $firstname) && preg_match($namePattern, $middlename)) {
            
            include('connection.php');
            
            // Подготовка SQL запроса
            $sql = "SELECT * FROM users WHERE login='$login'";
            $result = $conn->query($sql);
            
            // Проверка существования логина
            if ($result->num_rows > 0) {
                // Ошибка: логин уже существует
                echo "<script>alert('Ошибка: Логин уже занят');</script>";
            } else {
                // Логин свободен, можно регистрировать пользователя
                $stmt = $conn->prepare("INSERT INTO users (login, lastname, firstname, middlename, password) VALUES (?, ?, ?, ?, ?)");
                $stmt->bind_param("sssss", $login, $lastname, $firstname, $middlename, $password);
                $stmt->execute();

                // Получаем идентификатор только что зарегистрированного пользователя
                $newUserId = $conn->insert_id;

                // Устанавливаем идентификатор в $_SESSION['id']
                $_SESSION['id'] = $newUserId; 

                // Перенаправляем пользователя на страницу list.php
                header("Location: ./login.php");
                exit();
            }
            $conn->close();
        } else {
            // Ошибка: данные не соответствуют ограничениям
            echo "<script>alert('Ошибка: Проверьте правильность введенных данных');</script>";
        }
    } else {
        // Ошибка: не все поля заполнены
        echo "<script>alert('Ошибка: Пожалуйста, заполните все поля');</script>";
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
    <title>Регистрация</title>
</head>
<body>

    <div class="container">
        <div class="img">
            <img src="assets/img/user.png" alt="">
            <h1>Регистрация</h1>
        </div>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <div class="input-container">
                <input type="text" id="loginInput" name="login" placeholder="&nbsp;" pattern="[a-zA-Z0-9]+" title="Логин должен состоять только из латинских букв и цифр" required>
                <label for="loginInput">Логин</label>
            </div> 

            <div class="input-container">
                <input type="text" id="lastNameInput" name="lastname" placeholder="&nbsp;" pattern="[А-Яа-яЁё]+" title="Фамилия должна состоять только из русских букв" required>
                <label for="lastNameInput">Фамилия</label>
            </div>

            <div class="input-container">
                <input type="text" id="firstNameInput" name="firstname" placeholder="&nbsp;" pattern="[А-Яа-яЁё]+" title="Имя должно состоять только из русских букв" required>
                <label for="firstNameInput">Имя</label>
            </div>   

            <div class="input-container">
                <input type="text" id="middleNameInput" name="middlename" placeholder="&nbsp;" pattern="[А-Яа-яЁё]+" title="Отчество должно состоять только из русских букв" required>
                <label for="middleNameInput">Отчество</label>
            </div>    

            <div class="input-container">
                <input type="password" id="passwordInput" name="password" placeholder="&nbsp;" required>
                <label for="passwordInput">Пароль</label>
            </div>

            <div class="form_button">
                <button type="submit">Зарегистрироваться</button>
            </div>
        </form>

        <a class="link" href="login.php">
            <p>
                Вход
            </p>
        </a>
    </div>

</body>
</html>
