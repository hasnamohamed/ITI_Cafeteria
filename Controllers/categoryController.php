<?php
include  $_SERVER["DOCUMENT_ROOT"]."/php_Clone/ITI_Cafeteria/connect_to_db.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
class categoryController extends Connect
{
    public function addCategory($catName){
        try {
            $db= $this->connect_to_db();
            $query = "select * from category where name='`$catName`'";
            $select_stmt = $db->prepare($query);
            $select_stmt->execute();
            $data = $select_stmt->fetchAll(PDO::FETCH_ASSOC);
            if($data){
                echo '<h3 style="color:red ; text-align: center">Category Already exists</h3>';
                echo '<meta http-equiv="refresh" content="1;url=http://localhost:8080/php_Project/ITI_Cafeteria/views/admin/home/admin_home.php">';
            }
            elseif ($catName == null){
                echo '<h3 style="color:red ; text-align: center">Please Enter Category name</h3>';
                echo '<meta http-equiv="refresh" content="2;url=http://localhost:8080/php_Project/ITI_Cafeteria/views/admin/home/admin_home.php">';
            }
            else{
                $query = "Insert into `category` (name) values ('`$catName`')";
                $select_stmt = $db->prepare($query);
                $select_stmt->execute();
                echo '<h3 style="color:green ; text-align: center">Category Insertion Done</h3>';
                echo '<meta http-equiv="refresh" content="2;url=http://localhost:8080/php_Project/ITI_Cafeteria/views/admin/home/admin_home.php">';
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}