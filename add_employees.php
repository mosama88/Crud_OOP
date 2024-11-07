<?php include 'include/header.php' ?>

<h1 class="text-center my-4">Create Emplyees!</h1>

<?php

$departments = ['IT','HR','Accountant','Sales'];
$error = '';
if(isset($_POST['submit'])){


    $name= trim(htmlentities(htmlspecialchars($_POST['name']))) ;
    $department= trim(htmlentities(htmlspecialchars($_POST['department']))) ;
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $password= trim(htmlentities(htmlspecialchars($_POST['password']))) ;


    // var_dump( $name .  $department . $email . $password);

    if(empty($name) || empty($department)|| empty($email)|| empty($password)){
        $error = "Please Fill data";
    }else{

        if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){

            $department = strtolower($department);
            if(in_array($department,$departments)){
            }else{
                $error = 'Department Not Found';

            }

        }else{
            $error = "Please Write Valid Email";

        }

    }
}


?>
<form action="<?= $_SERVER['PHP_SELF']?>" method="POST">

    <div class="row col-8 mx-auto card p-4">
        <?php if ($error != ''):?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error?>
        </div>
        <?php endif?>
        <div class="form-group mb-3">
            <label for="exampleFormControlName" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="exampleFormControlName" placeholder="name">
        </div>

        <div class="form-group mb-3">
            <label for="exampleFormControldepartment" class="form-label">Department</label>
            <input type="text" class="form-control" name="department" id="exampleFormControldepartment"
                placeholder="Department">
        </div>


        <div class="form-group mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="text" class="form-control" name="email" id="exampleFormControlInput1"
                placeholder="name@example.com">
        </div>

        <div class="form-group mb-3">
            <label for="exampleFormControlpassword" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleFormControlpassword"
                placeholder="*******">
        </div>
        <div class="form-group mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleFormControlInput1"
                placeholder="name@example.com">
        </div>
        <div class="form-group mb-3 text-center">
            <button type="submit" name="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
    </div>
</form>

<?php include 'include/footer.php' ?>