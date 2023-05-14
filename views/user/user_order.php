<?php
include '../../Controllers/orderController.php';
include '../../views/navbar/navbar.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

$obj=new Order;
$orders=$obj->getAllOrders();

echo "
<h1 style='margin-left:200px;'class='mt-5'>My Orders</h1>
<form method='post' action='search.php'>
    <div class='d-flex mb-3'>
        <input type='date' placeholder='Date From' name='from' class='form-control ' id='title'style='margin-left:200px; margin-right:20px; width:400px; border:4px solid rgb(139, 108, 69);'>
        <input type='date' placeholder='Date To' name='to' class='form-control ' id='title' style='width:400px; border:4px solid rgb(139, 108, 69);' > 
        <input type='submit' class='btn btn-warning' style='width:200px; height:40px;margin-left:5px; ' value='Search'>
    </div>
    </form>
    <table class='table table-striped table-bordered table-hover text-center w-75 mt-5 'style='margin:auto;'>
        <tr class='table-secondary'>
            <th>Order Date</th>
            <th>Status</th>
            <th>Amount</th>
            <th>Action</th>
        </tr>";
        $price=0;
        foreach($orders as $order){
            $total=$obj->getAmount($order['id']);
       echo"<tr class='table-secondary'>
            <td>";echo $order['date']."<a class='btn btn-warning'>+</a></td>
            <td>"; echo $order['status'] ."</td>
            <td>"; echo $total ."</td>
            <td>
            <a href='cancel.php?id={$order['id']}'  class='btn btn-danger w-50'>Cancel</a>
            </td>
        </tr>";
        $price+=$order['total_price'];
        }
echo "</table>";
echo "
    <div style='margin-left:300px; border:3px solid rgb(139, 108, 69);' class='w-50 mt-5 d-flex justify-content-around align-items-baseline'>
        <h3 class='m-2'>Total : </h3>
        <h3 class='m-2'>EGP</h3> <br>
        <p class='m-2'>".$price."</p>
    </div>";
