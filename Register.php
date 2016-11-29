<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

 $username = $_POST['username'];
 $password = $_POST['password'];

 $sql = "INSERT INTO users (username,password) VALUES ('$username','$password')";

 require_once('dbConnect.php');

 if(mysqli_query($con,$sql)){
 echo 'Register uccessfully';
 }else{
 echo 'Could Not Register';
 }
 
 mysqli_close($con);
 }
?>