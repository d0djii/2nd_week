<?php
session_start();

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'wordphp';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        if ($mysql->connect_error) {
            die("Connection failed: " . $mysql->connect_error);
        }

        $login = $_POST['login'];
        $lastName = $_POST['lastname'];
        $firstName = $_POST['firstname'];
        $middleName = $_POST['middlename'];
        $password = $_POST['password'];

        $statement = $mysql->prepare("INSERT INTO users (login, lastname, firstname, middlename, password) VALUES (?, ?, ?, ?, ?)");
        if (!$statement) {
            die("Ошибка подготовки запроса: " . $mysql->error);
        }

        $statement->bind_param("sssss", $login, $lastName, $firstName, $middleName, $password);
        if (!$statement->execute()) {
            die("Ошибка выполнения запроса: " . $statement->error);
        }

        $statement->close();
        $mysql->close();

        header('Location: ../list.php');
        exit();
    } catch (Exception $e) {
        echo "Ошибка: " . $e->getMessage();
    }
}
?>
