<?php
include '../../Controllers/orderController.php';
$obj=new Order();
$fromDate=$_POST['from'];
$toDate=$_POST['to'];
$from=date("Y-m-d", strtotime($fromDate));  
$to=date("Y-m-d", strtotime($toDate));
$orders=$obj->search($from,$to);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

echo "
<h1 style='margin-left:200px;'class='mt-5'>Search Orders</h1>
    <table class='table table-striped table-bordered table-hover text-center w-75 mt-5 'style='margin:auto;'>
        <tr class='table-secondary'>
            <th>Order Date</th>
            <th>Status</th>
            <th>Amount</th>
            <th>Action</th>
        </tr>";
        foreach($orders as $order){
            $total=$obj->getAmount($order['id']);
        echo"<tr class='table-secondary'>
            <td>";echo $order['date']."<a class='btn btn-warning'>+</a></td>
            <td>"; echo $order['status'] ."</td>
            <td>"; echo $total ."</td>
            <td>
            <a class='btn btn-danger' href='cancel.php'>Cancel</a>
            </td>
        </tr>";
        }
echo "</table>";
