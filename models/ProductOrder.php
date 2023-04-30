<?php
class ProductsOrder
{
    function createProductOrderTable($db)
    {
        try {
            $db = Connect::connect_to_db();
            if ($db) {
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
    }
}
