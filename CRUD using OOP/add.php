<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="p-3 col text-center mt-5 text-white bg-primary">Add Employee</h2>
        </div>

    </div>


</div>
<?php
if (isset($_POST["submit"])) {
    $name = filter_var($_POST["name"],FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
    $department = filter_var($_POST["department"],FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["password"],FILTER_SANITIZE_STRING);
    echo $email;
}
?>


<div class="container">
    <div class="card">
        
            <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Name</label>
        <input name="name" value="Enter Name" class="form-control">
    </div>
    
    <div class="form-group">
        <label>Email</label>
        <input name="email" value="Enter Email" class="form-control">
    </div>
    <div class="form-group">
        <label>Department</label>
        <input name="department" value="Enter Department" class="form-control">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input name="password" value="Enter Password" class="form-control">
    </div>
    
    
    <button class="btn btn-success" name="submit">Submit</button>

         </form>
        </div>
    </div>
 
</div>