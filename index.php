<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOTOS - Каталог товаров</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>LOTOS</h1>
        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="catalog.php">Каталог</a></li>
                <li><a href="cart.php">Корзина</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Добро пожаловать в интернет-магазин LOTOS</h2>
        <p>У нас вы найдете лучшую бытовую химию и косметику по выгодным ценам.</p>
        <a href="catalog.php" class="button">Перейти в каталог</a>
    </main>
</body>
</html>
