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
if (isset($_GET["errors"])) {
    $errors = json_decode($_GET["errors"], true);
}
if (isset($_GET["old"])) {
    $old_data = json_decode($_GET["old"], true);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css ">
    <link rel="stylesheet" type="text/css" href="js/bootstrap.js ">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <form action="store.php" method="Post" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                  
                </div>
                <div class="col-md-5" id="c">
                    <div class="raw">
                        <div class="col-md-6">
                            <h3 class="text-left" id="h">Add Product Form</h3>
                        </div>
                        <div class="col-md-6">
                            <span class="glyphicon glyphicon-pencil " id="gg"></span>
                        </div>
                        <hr>
                        <div class="row">
                            <label class="label-col-md-2 control-label" id="l">Name</label>
                            <div class="col-md-10">
                                <input id="cc" type="name" class="form-control" name="name" value="<?php if (isset($old_data['name'])) echo $old_data['name']; ?>">
                                <span class="text-danger"> <?php if (isset($errors['name'])) echo $errors['name']; ?> </span>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <label id="l" for="exampleInputprice1" class="label-col-md-2 control-label">price</label>
                            <div class="col-md-10">
                                <input id="cc" type="number" class="form-control" value="<?php if (isset($old_data['price'])) echo $old_data['price']; ?>" name='price' id="exampleInputprice1" aria-describedby="priceHelp">
                                <span class="text-danger"> <?php if (isset($errors['price'])) echo $errors['price']; ?> </span>
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-10">
                            <label id="l" class="label-col-md-2 control-label" for="admin">Available</label>
                                <input type="checkbox" checked="true" value="1" name="available">
                        </div>
                        <hr>
                        <div class="row">
                            <label id="l" class="label-col-md-2 control-label" for="cat_id"> Category </label>
                            <div class="col-md-10">
                                <select class="form-control" id="cc" name="cat_id">
                                    <option id="o" value="1">1</option>
                                    <option id="o" value="2">2</option>
                                    <option id="o" value="3">3</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <label id="l" class="label-col-md-2 control-label">Image </label>
                            <div class="col-md-10">
                                <input type="file" name="image" class="form-control  w-100" id="image">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <button class="btn btn-danger" type="reset">Cancle</button>
                </div>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>