<?php
include "connection.php";
$id=$_GET['id'];
// echo $id;
$query="delete  from cutomerinfo where Id='$id'";
$result=mysqli_query($con,$query);
if($result){
    header('location:index.php');
}

?>