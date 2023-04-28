<?php
include "./connect_to_db.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container'> ";

try {
    $db = Connect::connect_to_db();
    if ($db) {        
        $query = "create table if not exists
        `room_num`(`id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `number` int)";
        $select_stmt = $db->prepare($query);
        $select_stmt->execute();

        $query = "create table if not exists
        `users`(`id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `email` varchar (100),
        `password` varchar (100),
        `name` varchar (100),
        `room_id` int,
        `is_admin` int,
        `ext` int,
        `image` varchar (100),
        FOREIGN KEY (room_id) REFERENCES room_num(id)
        )";
        $select_stmt = $db->prepare($query);
        $select_stmt->execute();

        $query = "create table if not exists
        `categories`(`id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `name` varchar (100))";
        $select_stmt = $db->prepare($query);
        $select_stmt->execute();

        $query = "create table if not exists
        `products`(`id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `name` varchar (100),
        `price` int,
        `cat_id` int,
        `available` int,
        `image` varchar (100),
        FOREIGN KEY (cat_id) REFERENCES categories(id)
        )";
        $select_stmt = $db->prepare($query);
        $select_stmt->execute();

        $query = "create table if not exists
        `orders`(`id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `status` varchar (100),
        `user_id` int,
        `room_id` int,
        `total_price` int,
        `date` date,
        `note` varchar (100),
        FOREIGN KEY (user_id) REFERENCES users(id),
        FOREIGN KEY (room_id) REFERENCES room_num(id)
        )";
        $select_stmt = $db->prepare($query);
        $select_stmt->execute();

        $query = "create table if not exists
        `products_orders`(`product_id` int,
        `order_id` int,
        `amount` int,
        FOREIGN KEY (product_id) REFERENCES products(id),
        FOREIGN KEY (order_id) REFERENCES orders(id))";
        $select_stmt = $db->prepare($query);
        $select_stmt->execute();
    } else
        echo "please check your connection";
} catch (Exception $e) {
    echo $e->getMessage();
}
