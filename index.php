<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ВЕСЕЛАЯ ДОРОГА</title>
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
    <header>
        <div class="logo">
            <p>ВЕСЕЛАЯ ДОРОГА</p>
            <img src="./image/logo.png" alt="">
        </div>
        <nav>
            <a href="">Главная</a>
            <a href="page/katalog.php">Каталог</a>
            <a href="">О нас</a>
            <a href="">Контакты</a>
        </nav>
        <div class="reglog">
            <a href="">Вход</a>
            <a href="">Регистрация</a>
        </div>
    </header>
    <div class="content">
        <div class="information">
            <div>
                <h1>Открой Россию с улыбкой!</h1>
                <p>Веселая Дорога - в каждом городе приключение начинается с нас</p>
            </div>
        </div>
        <div class="tours">
            <?php
                require('./php/connectDB.php');

                $sql = "SELECT * FROM Tours ORDER BY RAND() LIMIT 3";

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