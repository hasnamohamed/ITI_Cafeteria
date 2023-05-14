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
    public function search($from,$to)
    {
        try {

            $db = $this->connect_to_db();
            if ($db) {
                
                // $vanaf = mysql_real_escape_string($from);
                // $tot = mysql_real_escape_string($to);

                $sel = "SELECT * FROM `php_project`.`orders` WHERE date BETWEEN '$from' AND '$to'";
                $stmt = $db->prepare($sel);
                $stmt->execute();
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $data;
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


    public function cancelOrder($id){
        try {
            $db = $this->connect_to_db();
            if ($db) {
                $_query= "delete from `php_project`.`orders` where id=:id";
                $stmt = $db->prepare($_query);
                $stmt->bindParam(':id',$id, PDO::PARAM_INT);
                $stmt->execute();
                if($stmt->rowCount()){
                    echo "Order deleted";
                }
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }

    }

    }



















