<?php include 'include/header.php' ?>

<h1 class="text-center my-4">Edit Emplyees!</h1>


<form action="<?= URL . 'handlers/employees'?>/create_employees.php" method="POST">

    <div class="row col-8 mx-auto card p-4">


        <?php  if(isset($_SESSION['error'])):?>
        <?php foreach($_SESSION['error'] as $errors):?>
        <div class="alert alert-danger" role="alert">
            <?= $errors?>
        </div>
        <?php
    endforeach;
    unset($_SESSION['error']);
        ?>
        <?php endif;
        ?>

        <?php  if(isset($_SESSION['success'])):?>
        <div class="alert alert-success" role="alert">
            <?= $_SESSION['success']?>
        </div>
        <?php 
        unset($_SESSION['success'])
        ?>
        <?php endif;?>



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
            <label for="exampleFormControlInput1" class="form-label">Mobile</label>
            <input type="text" class="form-control" name="mobile" id="exampleFormControlInput1"
                placeholder="01152005100">
        </div>
        <div class="form-group mb-3 text-center">
            <button type="submit" name="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
    </div>
</form>

<?php include 'include/footer.php' ?>