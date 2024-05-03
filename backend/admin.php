<?php
session_start();

// Проверяем, авторизован ли пользователь
if(isset($_SESSION['id'])) {

    // Создаем подключение к базе данных
    include('connection.php');

    // Получаем имя пользователя из базы данных
    $user_id = $_SESSION['id'];

    // Используем подготовленный запрос
    $stmt = $conn->prepare("SELECT role FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id); // 'i' означает integer (целое число)
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $role = $row["role"];
    } else {
        $role = "nobody";
    }

    $users_query = $conn->query("SELECT id FROM users WHERE role != 'ADMIN'");
    $users = $users_query->fetch_all(MYSQLI_ASSOC);

    $stmt->close();
    $conn->close();

    if($role == 'UGU') {
      header('Location: ./ugu.php');
      exit(); 
    }
    else if ($role == 'OPOP') {
      header('Location: ./opop.php');
      exit(); 
    }
    else if ($role != 'ADMIN') {
      header('Location: ./login.php');
      exit(); 
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
    <title>Администрация</title>
</head>
<body>

    <div class="container">
        <div class="img">
            <img src="assets/img/user.png" width="225px" alt="">
            <?php foreach ($users as $user): ?>
              <?php echo $user['id']; ?>
              <div class=""></div> 
            <?php endforeach; ?>
        </div>
        
        <div class="form_button_1">
            <button>Выйти из аккаунта</button>
        </div>
    </div>
</body>
</html>
