<?php


class ProductsOrder 
{
  
  public function getDataByOrder($id,$db){
    
    try {
        if ($db) {
            $query = "select * from `php_project`.`products_orders` where `order_id`=:id";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':id',$id, PDO::PARAM_INT);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
    } catch (Exception $e) {
        return $e->getMessage();
    }
  }
}
