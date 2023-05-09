<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

echo "
<h1 style='margin-left:200px;'class='mt-5'>Orders</h1>
<table class='table table-striped table-bordered table-hover text-center w-75 mt-5'style='margin:auto;'>
        <tr class='table-secondary'>
            <th>Order Date</th>
            <th>Name</th>
            <th>Room</th>
            <th>Ext</th>
            <th>Action</th>
        </tr>
        <tr class='table-secondary'>
            <td>2018/02/02 03:30 Am </td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td></td>
        </tr>
        <tr class='table-secondary'>
            <td>2018/02/02 03:30 Am</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td></td>
        </tr>
        <tr class='table-secondary'>
            <td colspan='5'><br><br><br><h4 style='margin-left:80%;'>Total : &nbsp &nbsp &nbsp EGP</h4> </td>
        </tr>";
echo "</table>";