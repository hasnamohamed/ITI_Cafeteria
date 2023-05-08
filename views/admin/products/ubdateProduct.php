<?php

include '../../../Controllers/allProductsController.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container'> ";

 var_dump($_REQUEST);

$id= $_GET['id'];
$name = $_POST["name"];
$price = $_POST["price"];
$cat_id = $_POST["cat_id"];
$available	 =$_POST["available"];

try{
    $database=new allProductsController("localhost","root","","php_project");

    $db=$database->connectto_db();

    if($db){

    $heba =time();

        $image_new_name ='';

        if(isset($_FILES['image']) and ! empty($_FILES['image']['name'])){
            $imagename= $_FILES["image"]['name'];
            // var_dump($imagename);
            $tmp_name = $_FILES['image']['tmp_name'];
            $ext = pathinfo($imagename)['extension'];
            // var_dump($ext);
            $image_new_name = "../../../public/images/{$id}.{$ext}";
            if (in_array($ext,['png', 'jpg'])){
                try{
                    $uploaded = move_uploaded_file($tmp_name,"$image_new_name");
                    // var_dump($uploaded);
                } catch (Exception $e){
                    var_dump($e->getMessage());
                }
            }
        }else{
            $image_new_name="../../../public/images/default.jpg";
        }

        if($available=="1"){
            $available=1;
        }else{
            $available=0; 
        };
        
        $data=$database->updatefromTable($db,$id,"products",$name,$price,$cat_id,$available,$image_new_name);
        // var_dump($data)
    }
}catch(Exception $e){
    echo $e->getMessage();
}


 ?>