<?php
// Параметры подключения к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Trip";

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}
?>