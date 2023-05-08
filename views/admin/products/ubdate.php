<?php
include '../../../Controllers/allProductsController.php';
if (isset($_GET["errors"])) {
    $errors = json_decode($_GET["errors"], true);
}
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    // var_dump($id);
    try {
        $database = new allProductsController("localhost", "root", "","php_project");
        $db = $database->connectto_db();
        if ($db) {
            $select_query = "Select * from products where id=:id";
            $stmt = $db->prepare($select_query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $res = $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            // var_dump($row);
            if ($row) {
                //    var_dump($row);
            } else {
                header("Location:all_product.php");
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
    <title>Title</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container border border-3 w-25 ">
        <form action="ubdateProduct.php?id=<?php echo $row['id'] ?>" method="Post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="name" class="form-control" name="name" value="<?php echo $row['name'] ; ?>">
                <span class="text-danger"> <?php if (isset($errors['name'])) echo $errors['name']; ?> </span>
            </div>
            <div class="mb-3">
                <label for="exampleInputprice1" class="form-label">price</label>
                <input type="number" class="form-control" value="<?php echo $row['price']; ?>" name='price' id="exampleInputprice1" aria-describedby="priceHelp">
                <div id="priceHelp" class="form-text">We'll never share your price with anyone else.</div>
                <span class="text-danger"> <?php if (isset($errors['price'])) echo $errors['price']; ?> </span>
            </div>
            <div class="mb-3">
                <label for="admin">Available</label>
                <input style="margin-left: 10px;" type="checkbox" checked="true" value="1" name="available">
            </div>
            <div>
                <label for="cat_id"> Category </label>
                <select class="form-select" name="cat_id">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <br>
            <div class="mb-3">
                <label class="form-label">Image </label>
                <input type="file" name="image" class="form-control  w-100" id="image">
            </div>
            <button type="submit" class="btn btn-primary ">Add new Product</button>
        </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
