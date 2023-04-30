<?php
class Category
{
    function createCategoryTable($db)
    {
        try {
            $db = Connect::connect_to_db();
            if ($db) {
                $query = "create table if not exists
                `categories`(`id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
               `name` varchar (100))";
                $select_stmt = $db->prepare($query);
                $select_stmt->execute();
            } else
                echo "please check your connection";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
