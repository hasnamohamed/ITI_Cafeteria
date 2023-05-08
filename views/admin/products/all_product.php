<?php
include '../../../Controllers/allProductsController.php';


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container'> <br> <br>  <br> <br> <br>"; 

try {
    $database = new allProductsController("localhost", "root", "", "php_project");
    $db = $database->connectto_db();
    if ($db) {
        $data = $database->SelectfromTable($db, "product");
        echo "<table class='table table-bordered text-center border-dark'> 
            <thead class='bg-dark text-white'>
            <tr> 
            <th>  Name    </th>  
            <th>  Price   </th> 
            <th>  Cat_id  </th>
            <th>   Image  </th>
            <th>  Actions </th>
            </tr></thead>";
        foreach ($data as $row) {
            echo "<tbody class='table-light table-striped'>";
            echo "<tr>";
            echo "<td> {$row['name']} </td>";
            echo "<td> {$row['price']} </td>";
            echo "<td> {$row['cat_id']} </td>";
            echo "<td> <img width='100' height='75' src='{$row['image']}'></td>";
            echo " <td> <a href='ubdate.php?id={$row['id']}' class='btn btn-warning'> Edit </a>
             <a href='deleteProduct.php?id={$row['id']}' class='btn btn-danger'> Delete </a> 
             <a href='available.php?id={$row['id']}&available={$row['available']}' class='btn btn-warning'>  ";
             if($row['available']){
                echo "Unavailable";

             }
             else{
                echo " Available";
             }

             echo   " </a> </td>";

           
            echo "</tr>";
            echo "</tbody>";
        }
    }
    echo "</table>";
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
<a href="add_product.php" class="btn btn-dark">Add new product </a>