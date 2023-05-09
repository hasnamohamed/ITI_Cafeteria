<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

include '../navbar/navbar.php';
echo "
<h1 style='margin-left:200px;'class='mt-5'>My Orders</h1>
    <div class='d-flex mb-3'>
        <input type='text' placeholder='Date From' name='title' class='form-control ' id='title'style='margin-left:200px; margin-right:20px; width:400px; border:4px solid rgb(139, 108, 69);'>
        <img src='date.jpg' style='width:50px;heught:50px;'>
        <input type='text' placeholder='Date To' name='title' class='form-control ' id='title' style='width:400px; border:4px solid rgb(139, 108, 69);' >
        <img src='date.jpg' style='width:50px;heught:50px;'>
    </div>
    <table class='table table-striped table-bordered table-hover text-center w-75 mt-5 'style='margin:auto;'>
        <tr class='table-secondary'>
            <th>Order Date</th>
            <th>Status</th>
            <th>Amount</th>
            <th>Action</th>
        </tr>
        <tr class='table-secondary'>
            <td>2018/02/02 03:30 Am <a class='btn btn-warning'>+</a></td>
            <td>Nora</td>
            <td>Otto</td>
            <td>Processing</td>
        </tr>
        <tr class='table-secondary'>
            <td>2018/02/02 03:30 Am <a class='btn btn-warning'>+</a></td>
            <td>Nora</td>
            <td>Thornton</td>
            <td>out for delivery</td>
        </tr>
        <tr class='table-secondary'>
            <td>2018/02/02 03:30 Am <a class='btn btn-warning'>+</a></td>
            <td>Nora</td>
            <td>Thornton</td>
            <td>out for delivery</td>
        </tr>";
echo "</table>";
echo "
    <div style='margin-left:300px; border:3px solid rgb(139, 108, 69);' class='w-50 mt-5 d-flex justify-content-around align-items-baseline'>
        <h3 class='m-2'>Total : </h3>
        <h3 class='m-2'>EGP</h3>
    </div>";
