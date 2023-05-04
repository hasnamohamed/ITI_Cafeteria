<?php
session_start();
 include "../../Controllers/userController.php";
if (isset($_POST['login'])) {
    $errors=[];
    $email =  $_POST['email'];
    $password = $_POST['password'];
    $obj=new userController("127.0.0.1","root","","php_project");
    $row=$obj->login($email,$password);
    if($row){
        switch ($row) {
            case $row["is_admin"] == 1;
                $_SESSION['user'] = $row;
                header("Location:login.php");
                break;
            case $row["isadmin"] == 0;
                $_SESSION['user'] = $row;
                header("Location:login.php");
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