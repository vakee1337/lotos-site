<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'];
    if (!in_array($product_id, $_SESSION['cart'])) {
        $_SESSION['cart'][] = $product_id;
    }
}

require 'db.php';
$cart_items = [];
if (!empty($_SESSION['cart'])) {
    $ids = implode(',', $_SESSION['cart']);
    $query = "SELECT * FROM products WHERE id IN ($ids)";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $cart_items[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина - LOTOS</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Корзина</h1>
        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="catalog.php">Каталог</a></li>
                <li><a href="cart.php">Корзина</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Ваши товары</h2>
        <ul>
            <?php foreach ($cart_items as $item) { ?>
                <li><?php echo $item['name']; ?> - <?php echo $item['price']; ?> тенге</li>
            <?php } ?>
        </ul>
    </main>
</body>
</html>
