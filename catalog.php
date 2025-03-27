<?php
session_start();
require 'db.php';

$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог товаров - LOTOS</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Каталог товаров</h1>
        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="catalog.php">Каталог</a></li>
                <li><a href="cart.php">Корзина</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Наш ассортимент</h2>
        <div class="products">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="product">
                    <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
                    <h3><?php echo $row['name']; ?></h3>
                    <p><?php echo $row['price']; ?> тенге</p>
                    <form action="cart.php" method="post">
                        <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                        <button type="submit">Добавить в корзину</button>
                    </form>
                </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>
