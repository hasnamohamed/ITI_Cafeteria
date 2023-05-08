<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

echo "
<h1 style='margin-left:380px;'class='mt-5'>My Orders</h1>
    <div class='d-flex mb-3'>
        <input type='text' placeholder='Date From' name='title' class='form-control ' id='title'style='margin-left:380px; margin-right:20px; width:300px;'>
        <img src='/images/49.jpg'>
        <input type='text' placeholder='Date To' name='title' class='form-control ' id='title' style='width:300px;' >
        <img src='/images/49.jpg'>
    </div>
<table class='table table-bordered table-striped text-center w-50 mt-5'style='margin:auto;'>
    <thead>
        <tr>
            <th>Order Date</th>
            <th>Status</th>
            <th>Amount</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th >1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th>2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
    </tbody>";
echo "</table>";
echo "<h3 style='margin-left:850px;'class='mt-5'>Total</h3>";