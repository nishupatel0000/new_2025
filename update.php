<?php
include "connection.php";
$id=$_GET['id'];
$select="select * from cutomerinfo where Id='$id'";
$result=mysqli_query($con,$select);
$data=mysqli_fetch_assoc($result);
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
    <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Enter name" value="<?php echo $data['Name'] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="Email" class="form-control" id="exampleInputPassword1" name="email"  placeholder="Email" value="<?php echo $data['Email'] ?>">
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" value="<?php echo $data['Password'] ?>">
  </div>
  <div class="form-group" >
    <label for="Phone">Phone Number </label>
    <input type="text" class="form-control" id="phone" name="Phoneno" aria-describedby="phone" placeholder="Enter Your phoneNumber" value="<?php echo $data['Phoneno'] ?>" >
  </div>  <div class="form-group" >
    <label for="Address">Address </label>
    <input type="Address" class="form-control" id="Address" name="Address" Address="Address" aria-describedby="Address" placeholder="Enter Address" value="<?php echo $data['Address'] ?>">
  </div>
  <button type="submit" name="update" class="btn btn-success" class="abc">Update</button>

</form>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
<?php 
// print_r($_POST);
// && empty($name) &&  empty($email) && empty($password) 
if(isset($_POST['update'])){
    $name=$_POST['name'];
   $new_email=$_POST['email'];
    $old_email=$data['Email'];
    $password=$_POST['password'];
    $Phoneno=$_POST['Phoneno'];
    $Address=$_POST['Address'];
    if($new_email != ""){
    $finalemail=$new_email;
    }
    else{
        $finalemail=$old_email;
    }
    $selectquery = "SELECT * FROM cutomerinfo WHERE Email = '$finalemail' AND Email != '$old_email'";
$data = mysqli_query($con, $selectquery);
if(mysqli_num_rows($data) > 0){
    // echo "";
echo "Email already exists. Please use a different email.";
// header('location:index.php');
}
else{
    $update="UPDATE cutomerinfo SET Name ='$name',Email='$finalemail',Password='$password',Phoneno='$Phoneno',Address='$Address'
    WHERE Id =$id";
    $result=mysqli_query($con,$update);
    header('location:index.php');
}
}
 
?>
