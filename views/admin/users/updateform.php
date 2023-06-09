<?php
include '../../../Controllers/userController.php';

if (isset($_GET["errors"])) {
    $errors = json_decode($_GET["errors"], true);
}
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    // var_dump($id);
    try {
        $database = new userController("localhost", "root", "","php_project");
        $db = $database->connectto_db();
        if ($db) {
            $select_query = "Select * from users where id=:id";
            $stmt = $db->prepare($select_query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $res = $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            // var_dump($row);
            if ($row) {
                //    var_dump($row);
            } else {
                header("Location:allUsers.php");
            }
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
} else {
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css ">
    <link rel="stylesheet" type="text/css" href="js/bootstrap.js "> -->
    <link rel="stylesheet" type="text/css" href="form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <form action="updateUser.php?id=<?php echo $row['id'] ?>" method="Post" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                </div>
                <div class="col-md-5" id="c">
                    <div class="raw">
                        <div class="col-md-6">
                        <h3 class="text-left" id="h">update <?php echo $row['name']; ?></h3>
                        </div>
                        <div class="col-md-6">
                            <span class="glyphicon glyphicon-pencil " id="gg"></span>
                        </div>
                        <hr>
                        <div class="row">
                            <label class="label-col-md-2 control-label" id="l">Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="cc" name="name" Placeholder="Name" value="<?php echo $row['name'];?>">
                                <span class="text-danger"> <?php if (isset($errors['name'])) echo $errors['name']; ?> </span>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <label for="exampleInputEmail1" class="label-col-md-2 control-label" id="l">Email Addresse</label>
                        <div class="col-md-10">
                            <input type="email" class="form-control" id="cc"  value="<?php echo $row['email']; ?>" name='email' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            <span class="text-danger"> <?php if (isset($errors['email'])) echo $errors['email']; ?> </span>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <label for="cc" class="label-col-md-2 control-label" id="l">Password</label>
                        <div class="col-md-10">
                            <input type="password" class="form-control" id="cc"  value="<?php echo $row['password']; ?>" name='password' aria-describedby="emailHelp" placeholder="password">
                            <span class="text-danger"> <?php if (isset($errors['password'])) echo $errors['password']; ?> </span>
                        </div>
                    </div>
                    <hr>
                        <div class="row">
                        <label for="cc" class="label-col-md-2 control-label" id="l">Room Num</label>
                        <div class="col-md-10">
                            <div class="mb-3">
                                <select class="form-control" id="cc" name="room">
                                    <option value="1" id="o">1</option>
                                    <option value="2" id="o">2</option>
                                    <option value="3" id="o">3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <label for="admin" class="label col-md-2 control-label" id="1">is_Admin</label>
                        <div class="col-md-10">
                            <input type="checkbox" id="admin" name="admin" value="checked"/>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <label class="label-col-md-2 control-label" id="l">Ext</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" id="cc" name="ext" value="<?php echo $row['ext']; ?>">
                        </div>
                    </div>
                       <div class="row">
                        <label class="label-col-md-2 control-label" id="l"> User image</label>
                        <div class="col-md-10">
                            <br>
                            <input type="file" name="image" class="form-control  w-100" id="image" value="<?php echo $row['image']; ?>">
                        </div>
                      </div>
                      <br> 
                    <div class="row">
                         <button class="btn btn-info" type="submit">Add User</button>
                         <input type="reset" name="reset" value="Reset" class="btn btn-warning">
                    </div>

                </div>
  
                </div>
            </div>
        </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>