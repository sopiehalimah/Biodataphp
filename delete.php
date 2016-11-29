<?php 

 $id = $_GET['id'];

 require_once('dbConnect.php');

 $sql = "DELETE FROM biodata WHERE id=$id;";

 if(mysqli_query($con,$sql)){
 echo 'Biodata Deleted Successfully';
 }else{
 echo 'Could Not Delete Biodata Try Again';
 }

 mysqli_close($con);
 
?>