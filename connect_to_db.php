<?php
class Connect
{
    const DB_USER = "root";
    const DB_PASSWORD = "";
     function connect_to_db()
    {
        try {
            $dsn = 'mysql:dbname=php_project;host=127.0.0.1;port=3306;';
            $db = new PDO($dsn, self::DB_USER, self::DB_PASSWORD);
            $sh = $db->prepare("SHOW TABLES LIKE 'products_orders'");
            $sh->execute();
            $exists=$sh->fetch();
             if (!$exists) {
              Connect::createTables($db);
            }
            return $db;
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    static function createTables($db)
    {
        if ($db) {
            try {
                $query = "create table if not exists
        `users`(`id` serial primary key,
        `email` varchar (100),
        `password` varchar (100),
        `name` varchar (100),
        `room_id` int,
        `is_admin` int,
        `ext` int,
        `image` varchar (100))";
                $select_stmt = $db->prepare($query);
                $select_stmt->execute();

                $query = "create table if not exists
        `products`(`id` serial primary key,
        `name` varchar (100),
        `price` int,
        `cat_id` int,
        `available` int,
        `image` varchar (100))";
                $select_stmt = $db->prepare($query);
                $select_stmt->execute();

                $query = "create table if not exists
        `category`(`id` serial primary key,
        `name` varchar (100))";
                $select_stmt = $db->prepare($query);
                $select_stmt->execute();

                $query = "create table if not exists
        `room_num`(`id` serial primary key,
        `number` int)";
                $select_stmt = $db->prepare($query);
                $select_stmt->execute();

                $query = "create table if not exists
        `orders`(`id` serial primary key,
        `status` varchar (100),
        `user_id` int,
        `room_id` int,
        `total_price` int,
        `date` date,
        `note` varchar (100))";
                $select_stmt = $db->prepare($query);
                $select_stmt->execute();

                $query = "create table if not exists
        `products_orders`(
        `product_id` int,
        `order_id` int,
        `amount` int)";
                $select_stmt = $db->prepare($query);
                $select_stmt->execute();
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        } else
            echo "please check your connection";
    }
}
