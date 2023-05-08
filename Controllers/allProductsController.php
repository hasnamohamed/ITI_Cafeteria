 <?php
class allProductsController{
    public $DB_HOST = "";
    public  $DB_Product = "";
    public  $DB_PASSWORD = "";
    public $DB_DATABASE = "";
    public $port ="";

function __construct($DB_HOST, $DB_Product,$DB_PASSWORD,$DB_NAME,$PORT=3306 ){
  $this->DB_HOST=$DB_HOST;
  $this->DB_Product=$DB_Product;
  $this->DB_PASSWORD = $DB_PASSWORD;
  $this->DB_DATABASE=$DB_NAME;
  $this->port=$PORT;
}
public function connectto_db(){
    try {

        $dsn  = "mysql:host={$this->DB_HOST};port={$this->port};dbname={$this->DB_DATABASE}";

        $db = new PDO($dsn, $this->DB_Product,$this->DB_PASSWORD);

        return $db;

        } catch (Exception $e){

                echo $e->getMessage();
    }

}

//============select all========================
public function SelectfromTable($connection){
try{
    $query = "select * from `php_project`.`products`";
    $select_stmt = $connection->prepare($query);
    $res=$select_stmt->execute();
    $data = $select_stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;

}catch(Exception $e){

    return $e->getMessage();
}

}
//=====================delete product============================
public function deletefromTable( $connection,$table,$id){

try{
$_query= "delete from $table  where id=:id";
                $stmt = $connection->prepare($_query);
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $res = $stmt->execute();
                if($stmt->rowCount()){
                    echo "deleted ";
        
                    header("Location:all_product.php");
                }

}catch(Exception $e ){

return $e->getMessage();
}
}
//========================================update product ====================
public function updatefromTable($connection,$id,$table,$name,$price,$cat_id,$available,$image){
    try{
     $query = "update $table set `name`=:name,`price`=:price,`cat_id`=:cat_id,`available`=:available,`image`=:image where `id`=:id"; 
     $stmt=$connection->prepare($query);
    //  var_dump($query);
  //    var_dump($stmt);
     $stmt->bindParam(":name", $name, PDO::PARAM_STR);
     $stmt->bindParam(":price", $price, PDO::PARAM_STR);
     $stmt->bindParam(":cat_id",$cat_id, PDO::PARAM_STR);
     $stmt->bindParam(":available",$available, PDO::PARAM_INT);
     $stmt->bindParam(":image",$image, PDO::PARAM_INT);
     $stmt->bindParam(":id",$id, PDO::PARAM_INT);
    //  $data=$stmt->execute();
     $stmt->execute();
    //  var_dump($data);
    //  exit;
     if($stmt->rowCount()){

        // var_dump($stmt->rowCount());
        return 1;
       

        // header("Location:allUsers.php");
    }else{
        return 0 ; 
    }
    }catch(Exception $e ){
    
    return $e->getMessage();
    }
  }

  public function updateavailabliaty($connection,$id,$available){
    try{
     $query = "update `products` set `available`=:available where `id`=:id"; 
     $stmt=$connection->prepare($query);  
     $stmt->bindParam(":available",$available, PDO::PARAM_INT);
     $stmt->bindParam(":id",$id, PDO::PARAM_INT);
     $data=$stmt->execute();
    //  exit;
     if($stmt->rowCount()){

        // var_dump($stmt->rowCount());
        return 1;
       

        // header("Location:allUsers.php");
    }else{
        return 0 ; 
    }
    }catch(Exception $e ){
    
    return $e->getMessage();
    }
    }
}




?>




