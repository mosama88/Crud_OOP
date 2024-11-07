<?php include 'include/header.php' ?>

<h1 class="text-center my-4">Edit Emplyees!</h1>


<form action="" method="POST">
    <div class="row col-8 mx-auto card p-4">
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
            <input type="email" class="form-control" name="email" id="exampleFormControlInput1"
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
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
    </div>
</form>

<?php include 'include/footer.php' ?>