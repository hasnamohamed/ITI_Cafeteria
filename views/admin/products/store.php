<?php
include '../../../Controllers/productController.php';
$errors =[];
$formdata = [];
if (empty($_POST["name"]) and isset($_POST["name"])) {
    $errors['name'] = 'Name required';
} else {
    $formdata["name"] = $_POST["name"];
}
if(isset($_FILES['image']) and empty($_FILES['image']['name'])) {
    $errors['image'] = 'image required';
}
if (empty($_POST["price"]) and isset($_POST["price"])) {
    $errors['price'] = 'Price required';
} else {
    $formdata["price"] = $_POST["price"];
}
if ($_POST["available"]==1) {
    $available=1;
} else {
    $available=0;
}
if (empty($_POST["cat_id"]) and isset($_POST["cat_id"])) {
    $errors['cat_id'] = 'Category required';
} else {
    $formdata["cat_id"] = $_POST["cat_id"];
}

if($errors){
    $errors_str= json_encode($errors);
    $url="Location:add_product.php?errors={$errors_str}";
    if($formdata){
        $old_data= json_encode($formdata);
        $url .="&old={$old_data}";
    }

    header($url);
}else {

    $id = time();
    $image_new_name = '';
    $imagename = $_FILES["image"]['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $ext = pathinfo($imagename)['extension'];
    $image_new_name = $_SERVER["DOCUMENT_ROOT"]."/PHP_project/public/images/{$id}.{$ext}";
    try {
        $uploaded = move_uploaded_file($tmp_name, "$image_new_name");
    } catch (Exception $e) {
        var_dump($e->getMessage());
    }
    $obj=new productController();
    $res=$obj->creatProduct($image_new_name, $_POST["name"],$_POST["cat_id"], $_POST["price"],$available);
    if($res==true)
        header('Location:all_product.php');
    else
        echo $res;
}