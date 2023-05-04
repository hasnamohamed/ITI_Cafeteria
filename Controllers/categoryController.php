<?php
const DB_USER = "root";
const DB_PASSWORD = "";
    try {
        $dsn = 'mysql:dbname=php_project;host=127.0.0.1;port=3307;';
        $db = new PDO($dsn, DB_USER, DB_PASSWORD);
    }catch (Exception $e) {
            echo $e->getMessage();
        }
$Cat_Name = $_POST['Cat_Name'];
try {
    $query = "select * from category where name='`$Cat_Name`'";
    $select_stmt = $db->prepare($query);
    $res=$select_stmt->execute();
    $data = $select_stmt->fetchAll(PDO::FETCH_ASSOC);
    if($data){
        echo '<h3 style="color:red ; text-align: center">Category Already exists</h3>';
        echo '<meta http-equiv="refresh" content="1;url=http://localhost:8080/php_Project/ITI_Cafeteria/views/admin/home/admin_home.php">';
    }
    elseif ($Cat_Name == null){
        echo '<h3 style="color:red ; text-align: center">Please Enter Category name</h3>';
        echo '<meta http-equiv="refresh" content="2;url=http://localhost:8080/php_Project/ITI_Cafeteria/views/admin/home/admin_home.php">';
    }
    else{
        $query = "Insert into `category` (name) values ('`$Cat_Name`')";
        $select_stmt = $db->prepare($query);
        $select_stmt->execute();
        echo '<h3 style="color:green ; text-align: center">Category Insertion Done</h3>';
        echo '<meta http-equiv="refresh" content="2;url=http://localhost:8080/php_Project/ITI_Cafeteria/views/admin/home/admin_home.php">';
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
