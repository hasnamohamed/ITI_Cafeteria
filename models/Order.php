<?php
class Order
{
    function createOrderTable($db)
    {
        try {
            $db = Connect::connect_to_db();
            if ($db) {
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
            } else
                echo "please check your connection";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
