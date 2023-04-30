<?php
class Product
{
    function craeteProductTable($db)
    {
        try {
            $db = Connect::connect_to_db();
            if ($db) {
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
            } else
                echo "please check your connection";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
