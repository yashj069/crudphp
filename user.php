<?php 

    include 'connect.php';

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $password=$_POST['password'];

        $sql = "insert into `crud` (name,email,mobile,password)
         values('$name','$email','$mobile','$password')";
         $result=mysqli_query($con,$sql);
         if($result){
          // echo "Data inserted sucessfully";
          header("location:display.php");
         }else{
          die(mysqli_error($con));
         }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>CRUD</title>
</head>
<body>
<div class="container my-5">
    <p class="p">Welcome to the CRUD!</p>
    
    <form method="post">
    <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter your name">
  </div>

 
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Mobile</label>
    <input type="text" class="form-control" name="mobile" placeholder="Enter your mobile no.">
    
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>