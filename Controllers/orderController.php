<?php
include  $_SERVER["DOCUMENT_ROOT"] . "/ITI_Cafeteria/connect_to_db.php";
include "productOrderController.php";

class Order extends Connect
{
    public function getAllOrders()
    {
        try {
            $db = $this->connect_to_db();
            if ($db) {
                $query = "select * from `php_project`.`orders`";
                $stmt = $db->prepare($query);
                $stmt->execute();
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $data;
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function getAmount($id)
    {
        try {
            $db = $this->connect_to_db();
            if ($db) {
                $obj = new ProductsOrder;
                $orders = $obj->getDataByOrder($id, $db);
                $total = 0;
                foreach ($orders as $order) {
                    $total += $order['amount'];
                }
                return $total;
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
 

    }



















