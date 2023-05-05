<?php
include '../../../Controllers/categoryController.php';
$obj=new categoryController();
$res=$obj->addCategory( $_POST["Cat_Name"]);
