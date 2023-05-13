<?php
include '../../../Controllers/allProductsController.php';
include '../../../Controllers/userController.php';
$productsController=new allProductsController("localhost", "root","","php_project");
$userController = new userController("localhost", "root","","php_project");
$db=$productsController->connectto_db();
$products = $productsController->SelectfromTable($db);
$users = $userController->SelectfromTable($db , "users")
?>



    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Gemstones&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="home_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rubik+Gemstones&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Lobster&display=swap" rel="stylesheet">

<body>
<style>
   
</style>
    <section>
    <nav  class='navbar navbar-expand-lg 'style='background-color:#70560d;>
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
    </section>
    <br>
    <a class="i"><i class='fa-regular fa-user text-dark  fa-2x '></i> Admin</a>
   
    <span class="y" style="font-family: 'Anton', sans-serif;
font-family: 'Lobster', cursive;font-size:xx-large;"> Add To User </span>
    <br>
    <br>

    <div class="row">
                    <div class="col-md-10">
                        <select id="c">
                            <?php
                            foreach($users as $user){
                                echo "<option id='o'>"; echo $user["name"]."</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <br>
      
    <section class="d-flex justify-content-center" style="height: 700px">

        <div class="d-flex justify-content-center " style="width: 30%; height: 700px; background-color: white">
            <div class=" d-flex flex-column align-items-center " style="  background-color:#f8edcd ;   width: 85%; border: 1px solid saddlebrown; border-radius: 10px; ">
                <div class="tt">
                    <br>
                   <span class="t" style=" font-family: 'Rubik Gemstones', cursive;
    font-family: Arial, Helvetica, sans-serif;
    text-shadow: 5px 5px 5px grey ;
    text-shadow: 5px 5px 5px grey ;" > Tea </span> <input class="add" type="number" class="cal" name="tea"> <input type="button" value="+"> <span class="t"> or</span> <input type="button" value="-"> <span class="t">EGP</span> <input type="button" value="x" name="add"><br><br>
                   <span style=" font-family: 'Rubik Gemstones', cursive;
    font-family: Arial, Helvetica, sans-serif;
    text-shadow: 5px 5px 5px grey ;
    text-shadow: 5px 5px 5px grey ;"class="t"> Cola </span> <input class="add" type="number" class="cal" name="cola"> <input type="button" value="+"> <span class="t"> or</span> <input type="button" value="-"> <span class="t">EGP</span><input type="button" name="min" value="x">
                </div>
                <br><br><br><br>
                <div>
                   <span class="t"> Notes </span>
                    <textarea class="form-control" id="te" name="note" placeholder=""></textarea>

                </div>
                <br><br><br>
                <div class="row">
                    <div class="col-md-10">
                       <span class="t"> Room </span>
                        <br>
                        <select id="cc">
                            <option id="o">Combo Box</option>
                            <option id="o">Beaf</option>
                        </select>
                    </div>
                </div>
                <hr style="width: 100%; ">
                <div id="totalPrice">   
                <span class="t" id="egp">EGP</span> 
                <textarea class="rr"></textarea>
                </div>
                <br><br>
                <di>
                <input type="submit" value="Confirm" name="confirm" class="con "  > 
                </di>
            </div>
        </div>

        <?php
        foreach ($products as $product){
            echo '
                                        <div class="col-2 d-flex flex-column" style="height: 50px;" >
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="../../../public/images/'; echo $product["image"]. '"  alt="" value="'; echo $product["id"].'">
                            <div class="d-flex col-8 justify-content-center" style="margin-left: 20px; height: 20%">
                                <h4>'.$product["name"].'</h4>
                                <h4 style="margin-left:10px">'.$product["price"].'</h4>
                            </div>
                              </div>
                                    ';
        }
        ?>


        </div>










        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </section>
</body>

</html>


<?php

?>