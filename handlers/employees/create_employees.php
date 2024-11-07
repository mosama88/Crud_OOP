<?php

include "../../App/config.php";

$errors=[];
$success = "";

$departments = array('it','hr','sales');

if($_SERVER['REQUEST_METHOD'] == "POST"  && isset($_POST['submit'])){

$name = trim(htmlentities(htmlspecialchars($_POST['name'])));
$email = trim(htmlentities(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)));
$password = trim(htmlentities(htmlspecialchars($_POST['password'])));
$department = trim(htmlentities(htmlspecialchars($_POST['department'])));



if(empty($name)){
    $errors []= "Name Is Empty please write in input" ;
}
if(empty($email)){
    $errors []= "email Is Empty please write in input" ;
}
if(empty($password)){
    $errors []= "password Is Empty please write in input" ;
}
if(empty($department)){
    $errors []= "department Is Empty please write in input" ;
}elseif(!in_array($department,$departments)){
    $errors[] = "Department Not Exists";
}

$_SESSION['error'] = $errors;
if(empty($errors)){
    $_SESSION['success'] = "Data Inserted successfully";
    header ("location: ../../add_employees.php");
    die();
}else{
    header ("location: ../../add_employees.php");
    die();
}


}