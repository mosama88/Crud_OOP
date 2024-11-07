<?php

include "../../App/config.php";
 use App\Database;


$errors=[];
$success = "";

$departments = array('it','hr','sales');

if($_SERVER['REQUEST_METHOD'] == "POST"  && isset($_POST['submit'])){

$name = trim(htmlentities(htmlspecialchars($_POST['name'])));
$email = trim(htmlentities(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)));
$password = trim(htmlentities(htmlspecialchars($_POST['password'])));
$department = trim(htmlentities(htmlspecialchars($_POST['department'])));
$mobile = trim(htmlentities(htmlspecialchars($_POST['mobile'])));



if(empty($name)){
    $errors []= "Name Is Empty please write in input" ;
}
if(empty($email)){
    $errors []= "email Is Empty please write in input" ;
}
if(empty($password)){
    $errors []= "password Is Empty please write in input" ;
}
if(empty($mobile)){
    $errors []= "mobile Is Empty please write in input" ;
}
if(empty($department)){
    $errors []= "department Is Empty please write in input" ;
}elseif(!in_array($department,$departments)){
    $department = strtolower($department);
    $errors[] = "Department Not Exists";
}

$_SESSION['error'] = $errors;
if(empty($errors)){

    $db = new Database();
    $newPassword = $db->enc_password($password);
    $sql = "INSERT INTO `employees`(`name`,`email`,`password`,`department`,`mobile`)VALUES('$name','$email','$newPassword','$department','$mobile')";
    $_SESSION['success'] = $db->insert($sql);
    redirect("../../add_employees.php");
    die();
}else{
    redirect("../../add_employees.php");
    die();
}


}