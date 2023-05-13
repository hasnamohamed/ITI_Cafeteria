<section>
    <nav  class='navbar navbar-expand-lg 'style='background-color:rgb(139, 108, 69);'>
  <div class='w-100 d-flex justify-content-between '>
    <div class='' d-flex justify-content-between'>
      <div>
      <a class='navbar-brand' ></a>
      </div>
      <div class='collapse navbar-collapse' >
        <ul class='navbar-nav mr-auto'>
          
          <li class='nav-item'>
            <img src='../../public/images/coffe.png' alt='' class='logo' style='width:50px; height:50px; border-radius:50%; margin-right:20px; margin-left:5px; '/>
          </li>
          <li class='nav-item'>
            <a class='nav-link  text-light'>Home</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link  text-light'>Product</a>
          </li>

          <li class='nav-item'>
            <a class='nav-link  text-light' >Users</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link  text-light'>Manual Order</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link  text-light'>Checks</a>
          </li>
        </ul>
      </div>
    </div>

    <div class='d-flex justify-content align-items-center'>
      <div class='row'>
        <div class='col'>
          <div class='w-100 d-flex justify-content align-items-center'>
            <img class='logo mx-3 ' src='../../public/images/user-circle-svgrepo-com.svg' style='width:50px; height:50px;' />
            <a class='text-light text-decoration-none '>Admin</a>
          </div>
        </div>
      </div>
      <ul class='navbar-nav mr-auto'>
        <li class='nav-item'>
          <i class='fa-regular fa-user text-light'></i>
        </li>
        <li class='nav-item'>
          <a><i class='fontSize mx-3 text-light fa-solid fa-right-from-bracket'></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>


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

        echo "<h1 >All Products</h1>";
        echo "<table class='table table-striped table-bordered table-hover text-center'> 
            <tr class='table-secondary'> 
            <th>  Name    </th>  
            <th>  Price   </th> 
            <th>  Cat_id  </th>
            <th>   Image  </th>
            <th>  Actions </th>
            </tr>";
        foreach ($data as $row) {
            
            echo "<tr class='table-secondary'>";
            echo "<td> {$row['name']} </td>";
            echo "<td> {$row['price']} </td>";
            echo "<td> {$row['cat_id']} </td>";
            echo "<td> <img width='100' height='75' src='{$row['image']}'></td>";
            echo " <td> <a href='ubdate.php?id={$row['id']}' class='btn btn-info'> Edit </a>
             <a href='deleteProduct.php?id={$row['id']}' class='btn btn-danger'> Delete </a> 
             <a href='available.php?id={$row['id']}&available={$row['available']}' class='btn btn-primary'>  ";
             if($row['available']){
                echo "Unavailable";

             }
             else{
                echo " Available";
             }

             echo   " </a> </td>";

           
            echo "</tr>";
           
        }
    }
    echo "</table>";
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
<a href="add_product.php" class="btn btn-success">Add new product </a>