<?php
class userController{
    public $DB_HOST = "";
    public  $DB_USER = "";
    public  $DB_PASSWORD = "";
    public $DB_DATABASE = "";
    public $port ="";

function __construct($DB_HOST, $DB_USER,$DB_PASSWORD,$DB_NAME,$PORT=3306 ){
  $this->DB_HOST=$DB_HOST;
  $this->DB_USER=$DB_USER;
  $this->DB_PASSWORD = $DB_PASSWORD;
  $this->DB_DATABASE=$DB_NAME;
  $this->port=$PORT;
}
public function connectto_db(){
    try {

        $dsn  = "mysql:host={$this->DB_HOST};port={$this->port};dbname={$this->DB_DATABASE}";

        $db = new PDO($dsn, $this->DB_USER,$this->DB_PASSWORD);

        return $db;

        } catch (Exception $e){

                echo $e->getMessage();
    }

}

//============select all========================
public function SelectfromTable($connection,$table){
try{
    $query = "select id,name,room_id,image,ext from `$table`";
    $select_stmt = $connection->prepare($query);
    $res=$select_stmt->execute();
    $data = $select_stmt->fetchAll(PDO::FETCH_ASSOC);

    return $data;

}catch(Exception $e){

    return $e->getMessage();
}

}
//====================insert user========================
public function insertInto($connection,$table,$useremail,$userpassword,$username,$userroom,$useriden,$userext,$image_new_name){
    try{
    $query="Insert INTO `$table` (`email`,`password`,`name`,`room_id`,`is_admin`,`ext`,`image`) Values(:useremail,:userpassword,:username,:userroom,:useriden,:userext,:userimage)";
    $stmt=$connection->prepare($query);
    $stmt->bindParam(":useremail", $useremail, PDO::PARAM_STR);
    $stmt->bindParam(":userpassword", $userpassword, PDO::PARAM_STR);
    $stmt->bindParam(":username",$username, PDO::PARAM_STR);
    $stmt->bindParam(":userroom",$userroom, PDO::PARAM_STR);
    $stmt->bindParam(":useriden",$useriden, PDO::PARAM_STR);
    $stmt->bindParam(":userext",$userext, PDO::PARAM_STR);
    $stmt->bindParam(":userimage",$image_new_name, PDO::PARAM_STR);
    $stmt->execute();

    }catch(Exception $e){
    
        return $e->getMessage();
    }
    
    }
//=====================delete user============================
public function deletefromTable( $connection,$table,$id){

try{
$_query= "delete from $table  where id=:id";
                $stmt = $connection->prepare($_query);
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $res = $stmt->execute();
                if($stmt->rowCount()){
                    echo "deleted ";
        
                    header("Location:allUsers.php");
                }

}catch(Exception $e ){

return $e->getMessage();
}
}
//================login =========================
public function login($email,$password)
{
    $db=$this->connectto_db();
    $query = "SELECT * FROM `users` WHERE `email`=:email AND `password` = :password";
    $stmt = $db->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $res= $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

//========================================update user====================
public function updatefromTable($connection,$id,$table,$useremail,$userpassword,$username,$userroom,$useriden,$userext,$image_new_name){

    try{
     $query = "update $table set `email`=:useremail,`password`=:userpassword,`name`=:username,`room_id`=:userroom,`is_admin`=:useriden,`ext`=:userext,`image`=:image_new_name where id=:id ";
     $stmt=$connection->prepare($query);
  //    var_dump($query);
  //    var_dump($stmt);
     $stmt->bindParam(":useremail", $useremail, PDO::PARAM_STR);
     $stmt->bindParam(":userpassword", $userpassword, PDO::PARAM_STR);
     $stmt->bindParam(":username",$username, PDO::PARAM_STR);
     $stmt->bindParam(":userroom",$userroom, PDO::PARAM_STR);
     $stmt->bindParam(":useriden",$useriden, PDO::PARAM_STR);
     $stmt->bindParam(":userext",$userext, PDO::PARAM_STR);
     $stmt->bindParam(":image_new_name",$image_new_name, PDO::PARAM_STR);
     $stmt->bindParam(':id', $id, PDO::PARAM_INT);
     $stmt->execute();
    
    
    }catch(Exception $e ){
    
    return $e->getMessage();
    }
    }
}
?>