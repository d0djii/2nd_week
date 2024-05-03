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

    $stmt->close();
    $conn->close();
}

if($role != 'admin')

?>
