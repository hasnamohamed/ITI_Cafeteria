<?php
include  $_SERVER["DOCUMENT_ROOT"]."/PHP_project/connect_to_db.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container'> ";

class productController extends Connect
{
    public function creatProduct ($image,$name,$cat_id,$price,$available){
        try {
            $db= $this->connect_to_db();
            if($db) {
                $query = "Insert into `php_project`.`products`(name, price,cat_id,available,image) VALUES (:name, :price, :cat_id,:available,:image)";
                $stmt = $db->prepare($query);
                $stmt->bindParam(':name',$name, PDO::PARAM_STR);
                $stmt->bindParam(':price',$price, PDO::PARAM_STR);
                $stmt->bindParam(':cat_id',$cat_id, PDO::PARAM_INT);
                $stmt->bindParam(':available',$available, PDO::PARAM_INT);
                $stmt->bindParam(':image', $image, PDO::PARAM_STR);
                $res = $stmt->execute();
                return $res;
            }
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }
}
