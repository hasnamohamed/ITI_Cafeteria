<?php
if(isset($_GET["errors"])){
    $errors = json_decode($_GET["errors"], true);
}
if(isset($_GET["old"])){
    $old_data = json_decode($_GET["old"], true);
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link href="style.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head> 
<body>
<div class="container border border-3 w-25 ">
    <form action="addUser.php" method="Post" enctype="multipart/form-data" >
              <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="name" class="form-control" name="name">
        <span class="text-danger"> <?php if(isset($errors['name'])) echo $errors['name']; ?> </span>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control"
               name='email' id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        <span class="text-danger"> <?php if(isset($errors['email'])) echo $errors['email']; ?> </span>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name='password'  id="exampleInputPassword1">
        <span class="text-danger"><?php if(isset($errors['password'])) echo $errors['password']; ?> </span>
    </div>
    <div>
     <label for="room"> Room Num </label>
     <select class="form-select" name ="room">
     <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      </select>
   </div>
   <br>

<div class="mb-3">
       <label for="admin">is_admin</label> 
       <input style="margin-left: 10px;"   type="checkbox"  checked="true" id="admin" name="iden">
    </div>
    <div class="mb-3">
        <label for="ext" class="form-label">Ext</label> 
        <input type="number" name="ext" class="form-control  w-100" id="ext">
    </div>
    <div class="mb-3">
        <label class="form-label">Image </label>
        <input type="file" name="image"  class="form-control  w-100" id="image">
    </div>
    <button type="submit" class="btn btn-primary ">Add new User </button> 
</form>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
