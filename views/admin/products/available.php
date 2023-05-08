<?php
include '../../../Controllers/allProductsController.php';

    try{
        $database=new allProductsController("localhost","root","","php_project");
    
        $db=$database->connectto_db();
    
        if($db){ 
            if ($_GET['available']){
                $data=$database->updateavailabliaty($db,$_GET['id'],0);
            }   
            else {
                $data=$database->updateavailabliaty($db,$_GET['id'],1);
            }   
            if($data){
    
               header('Location:all_product.php');
            }
            else{
                header('Location:all_product.php');
            }
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }
    
    
     
    

