<?php
include './models/User.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container'> ";

$username = $_POST["name"];
$useremail = $_POST["email"];
$userroom =$_POST["room"];
$userpassword=$_POST["password"];
$userext = $_POST["ext"];
$useriden =$_POST["iden"];
try{
    $database=new User("localhost", "root","","php_project");

    $db=$database->connect_to_db();

    if($db){

        $id = time();

        $image_new_name ='';
        if(isset($_FILES['image']) and ! empty($_FILES['image']['name'])){
            $imagename= $_FILES["image"]['name'];
            // var_dump($imagename);
            $tmp_name = $_FILES['image']['tmp_name'];
            $ext = pathinfo($imagename)['extension'];
            // var_dump($ext);
            $image_new_name = "images/{$id}.{$ext}";
            if (in_array($ext,['png', 'jpg'])){
                try{
                    $uploaded = move_uploaded_file($tmp_name,"$image_new_name");
                    // var_dump($uploaded);
                } catch (Exception $e){
                    var_dump($e->getMessage());
                    exit;

                }

            }
        }

        $data=$database->insertInto($db,"users",$useremail,$userpassword,$username,$userroom,$useriden,$userext,$image_new_name); 
         header("Location:allUsers.php");
    }

}catch(Exception $e){
    echo $e->getMessage();
}




?>