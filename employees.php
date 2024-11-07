<?php include 'include/header.php' ?>

<?php
$sql = "SELECT * FROM `employees` ORDER BY `id` DESC";

$result = mysqli_query($sql,$conn)

?>

<h1>Emplyees All Data!</h1>
<div class="row col-10 mx-auto">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Department</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
            </tr>

        </tbody>
    </table>
</div>


<?php include 'include/footer.php' ?>