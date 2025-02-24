<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
    .form-group {
        margin: 15px 15px;
    }

</style>
<body>
<form method="post" action="#">
  <div class="form-group" >
    <label for="name">Name </label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="Email" class="form-control" id="exampleInputPassword1" name="email"  placeholder="Email">
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
  </div>
  <div class="form-group" >
    <label for="Phone">Phone Number </label>
    <input type="text" class="form-control" id="phone" name="Phoneno" aria-describedby="phone" placeholder="Enter Your phoneNumber">
  </div>  <div class="form-group" >
    <label for="Address">Address </label>
    <input type="Address" class="form-control" id="Address" name="Address" Address="Address" aria-describedby="Address" placeholder="Enter Address">
  </div>
  <button type="submit" name="submit" class="btn btn-primary" class="abc">Submit</button>

</form>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
<?php 
include "connection.php";
// print_r($_POST);
// && empty($name) &&  empty($email) && empty($password) 
if(isset($_POST['submit'])){
 $name=$_POST['name'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $Phoneno=$_POST['Phoneno'];
 $Address=$_POST['Address'];



$selectquery = "SELECT * FROM cutomerinfo WHERE Email = '$email'";
$data = mysqli_query($con, $selectquery);

if(mysqli_num_rows($data) > 0){
    // echo "";

echo "Email already exists. Please use a different email.";
// header('location:index.php');
}
else{
    $query="insert into cutomerinfo(Name,Email,Password,Phoneno,Address)values('$name','$email','$password','$Phoneno','$Address')";
    $result=mysqli_query($con,$query);
    //    echo "data inserted in database successfully";
    $_SESSION["success"] =1;
header('location:index.php');

}

// echo $emailcheck = ($email==$record['Email']) ? "already exist" : "hey";
}   
 
?>