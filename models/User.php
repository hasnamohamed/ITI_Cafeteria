<?php
class User
{
    function createUserTable($db)
    {
        try {
            $db = Connect::connect_to_db();
            if ($db) {
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
            } else
                echo "please check your connection";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
