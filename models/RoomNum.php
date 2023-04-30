<?php
class RoomNum
{
    function createRoomNumTable($db)
    {
        try {
            $db = Connect::connect_to_db();
            if ($db) {
                $query = "create table if not exists
                `room_num`(`id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
                `number` int)";
                $select_stmt = $db->prepare($query);
                $select_stmt->execute();
            } else
                echo "please check your connection";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
