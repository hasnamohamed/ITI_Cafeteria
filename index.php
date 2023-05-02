<?php

include './connect_to_db.php';
$obj=new Connect();
$db=$obj->connect_to_db();

// if($db)
// {
//     echo "Databese connected succefully";
// }
// else{
//     echo "connection failed";
// }