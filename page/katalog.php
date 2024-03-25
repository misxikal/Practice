<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <link rel="stylesheet" href="../style/main.css">
</head>
<body>
    <header>
        <div class="logo">
            <p>ВЕСЕЛАЯ ДОРОГА</p>
            <img src="../image/logo.png" alt="">
        </div>
        <nav>
            <a href="../index.php">Главная</a>
            <a href="">Каталог</a>
            <a href="">О нас</a>
            <a href="">Контакты</a>
        </nav>
        <div class="reglog">
            <a href="">Вход</a>
            <a href="">Регистрация</a>
        </div>
    </header>
    <div class="content">
        <div class="tours">
        <?php
        require('../php/connectDB.php');
        // SQL-запрос для получения данных о турах
        $sql = "SELECT * FROM Tours";

        $result = $conn->query($sql);

        // Вывод данных на веб-страницу
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='tour' style='background-image: url(".$row['image'].");'>
                        <div class='backdark'>
                        <h1>".$row["TourName"]."</h1>
                        <p>".$row["Price"]." р.</p>
                        <input type='submit' value='Заказать'>
                        </div>
                    </div>";
            }
            echo "</table>";
        } else {
            echo "Нет данных о турах";
        }

        // Закрытие соединения
        $conn->close();
        ?>
        </div>
    </div>
</body>
</html>