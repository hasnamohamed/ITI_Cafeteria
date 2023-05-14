<section>
    <nav  class='navbar navbar-expand-lg 'style='background-color:rgb(139, 108, 69);'>
  <div class='w-100 d-flex justify-content-between '>
    <div class='' d-flex justify-content-between'>
      <div>
      <a class='navbar-brand' ></a>
      </div>
      <div class='collapse navbar-collapse' >
        <ul class='navbar-nav mr-auto'>
          
          <li class='nav-item'>
            <img src='../../public/images/coffe.png' alt='' class='logo' style='width:50px; height:50px; border-radius:50%; margin-right:20px; margin-left:5px; '/>
          </li>
          <li class='nav-item'>
            <a class='nav-link  text-light'>Home</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link  text-light'>Product</a>
          </li>

          <li class='nav-item'>
            <a class='nav-link  text-light' >Users</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link  text-light'>Manual Order</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link  text-light'>Checks</a>
          </li>
        </ul>
      </div>
    </div>

    <div class='d-flex justify-content align-items-center'>
      <div class='row'>
        <div class='col'>
          <div class='w-100 d-flex justify-content align-items-center'>
            <img class='logo mx-3 ' src='../../public/images/user-circle-svgrepo-com.svg' style='width:50px; height:50px;' />
            <a class='text-light text-decoration-none '>Admin</a>
          </div>
        </div>
      </div>
      <ul class='navbar-nav mr-auto'>
        <li class='nav-item'>
          <i class='fa-regular fa-user text-light'></i>
        </li>
        <li class='nav-item'>
          <a><i class='fontSize mx-3 text-light fa-solid fa-right-from-bracket'></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php
include '../../../Controllers/userController.php';

if (isset($_GET["errors"])) {
    $errors = json_decode($_GET["errors"], true);
}
if (isset($_GET["old"])) {
    $old_data = json_decode($_GET["old"], true);
}
try {
    $database = new userController("localhost", "root", "", "php_project");
    $db = $database->connectto_db();
    if ($db) {
        $select_query = "Select* from room_num";
        $stmt = $db->prepare($select_query);
        $res = $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css ">
    <link rel="stylesheet" type="text/css" href="js/bootstrap.js ">
    <link rel="stylesheet" type="text/css" href="form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
.btn-info{
    margin-top: 20px;
    font-size: 18px;
    width:20%;
    margin-bottom: 20px;
}
.btn-danger{
    margin-top: 20px;
    font-size:18px;
    width: 20%; 
    margin-bottom: 20px;
}
*{
    margin: 0px;
    padding: 0px;
  }
  body{
      background-image: url(../../../public/images/pexels-naim-benjelloun-2287523.jpg); 
      background-size: cover; 
      background-attachment: fixed; 
      font-family:  'Times New Roman', Times, serif;
  }
  h1{
      font-size: 40px;
      color: white;
  }
  #hh{
    margin-top: 250px;
    font-size: 25px;
    color: white;
  }
  #h{
    font-size: 25px;
    color: white;
  }
#c{
    margin-top: 80px;
    box-shadow: -1px 1px 60px 10px black;
    background: rgb(0,0,0,0.4);
}

#l{

    font-weight: normal;
    margin-top: 15px;
    color: white;
    font-size: 19px;
}



</style>
<body>
    <form action="addUser.php" method="Post" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                </div>
                <div class="col-md-5" id="c">
                    <div class="raw">
                        <div class="col-md-6">
                            <h3 class="text-left" id="h">Add New User</h3>
                        </div>
                        <div class="col-md-6">
                            <span class="glyphicon glyphicon-pencil " id="gg" ></span>
                        </div>
                        <hr>
                        <div class="row">
                            <label class="label-col-md-2 control-label" id="l">Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="cc" name="name" placeholder="Name">
                                <span class="text-danger"> <?php if (isset($errors['name'])) echo $errors['name']; ?> </span>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <label for="exampleInputEmail1" class="label-col-md-2 control-label" id="l">Email Addresse</label>
                        <div class="col-md-10">
                            <input type="email" class="form-control" id="cc" value="<?php if (isset($old_data['email'])) echo $old_data['email']; ?>" name='email' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            <span class="text-danger"> <?php if (isset($errors['email'])) echo $errors['email']; ?> </span>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <label for="cc" class="label-col-md-2 control-label" id="l">Password</label>
                        <div class="col-md-10">
                            <input type="password" class="form-control" id="cc" value="<?php if (isset($old_data['password'])) echo $old_data['password']; ?>" name='password' aria-describedby="emailHelp" placeholder="password">
                            <span class="text-danger"> <?php if (isset($errors['password'])) echo $errors['password']; ?> </span>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <label for="cc" class="label-col-md-2 control-label" id="l">Room Num</label>
                        <div class="col-md-10">
                            <div class="mb-3">
                                <select class="form-control" id="cc" name="room">
                                <?php
                                    foreach ($row as $value) {
                                        echo "<option value='{$value['id']}'>{$value['number']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <label for="admin" class="label col-md-2 control-label" id="1" style="margin-top:-5px;color: white;font-size:19px;font-weight:normal;">Is_Admin</label>
                        <div class="col-md-10">
                            <input type="checkbox" id="admin" name="admin" value="checked" />
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <label class="label-col-md-2 control-label" id="l">Ext</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" id="cc" name="ext">
                        </div>
                    </div>
                    <div class="row">
                        <label class="label-col-md-2 control-label" id="l"> User image</label>
                        <div class="col-md-10">
                            <br>
                            <input type="file" name="image" class="form-control  w-100" id="image">
                        </div>
                    </div>
                    <br>
                    <div class="row" style="margin-left:150px;padding:2px">
                        <button class="btn btn-info" type="submit" style="margin-top: 20px; font-size:18px; width: 20%;  margin-bottom: 20px;">Sumbit</button>
                        &nbsp; &nbsp;  &nbsp;
                        <button class="btn btn-danger" type="cancle"  style="margin-top: 20px; font-size:18px;width: 20%; margin-bottom: 20px;">Cancle</button>
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