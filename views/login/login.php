

<?php
session_start();

if (isset($_POST['login'])) {
$errors=[];
   $email =  $_POST['Email Address'];
   $password = $_POST['Password'];

   $stmt = "SELECT * FROM `users` WHERE `Email Address` =:email AND `Password` = :password ";
   $stmt = $db->prepare($stmt);
   $stmt->bindParam(":Email Address", $email);
   $stmt->bindParam(":Password", $password);
   $stmt->execute();
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
  
   if($row){
   switch ($row) {
      case $row["is_admin"] == 1;
         $_SESSION['user'] = $row;
        
         header("Location://admin");
         break;
      case $row["isadmin"] == 0;
               $_SESSION['user'] = $row;
               header("Location://user");
         break;
      default:
      break;
   }
}else{
      $message[] = 'incorrect email or password!';
      header("location:login.php");
   }
   


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>;
  <link rel="stylesheet" type="text/css" href="login.css">;
  <link hreef="https://fonts.googleeapis.com/css?family=Roboto:" rel="stylesheet" />
</head>

<body>


  <div class="global-container" id="cc">
    <div class="card login-form" id=l>
      <div class="card-body">
        <h1 class="card-title text-centr">Cafeteria</h1>
        <div class="card-text">
          <form action="session.php"method="post">
            <div class="form-group">
              <label for="exampleInputEmail">Email Address</label>
              <input type="email" class="form-control form-control-sm" id="exampleInputEmail" id="e"  name="Email Address" style="color:beige"
                ; />
            </div>



            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>

              <a href="confirmPassword.html" style="float:right; font-size: 12px;">Forget Password</a>
              <input type="password" class="form-control form-control-sm" id="exampleInputPassword1" id="e" name="Password" style="color:beige"
              ; />
            </div>


            <div class="form-group">

              <button type="submit" class="btn btn-primary btn-block  form-control form-control-sm">Log In</button>
            </div>

          </form>
          <div class="Signup">
            <br>
            Dont have an account?<a href="createAccount.html">Create One</a>


          </div>


        </div>
      </div>


    </div>
  </div>
  </div>

</body>

</html>