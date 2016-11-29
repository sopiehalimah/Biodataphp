<?php

 if($_SERVER['REQUEST_METHOD']=='POST'){

 $id = $_POST['id'];
 $nama = $_POST['nama'];
 $email = $_POST['email'];
 $alamat = $_POST['alamat'];

 require_once('dbConnect.php');

 $sql = "UPDATE biodata SET nama = '$nama', email = '$email', alamat = '$alamat' WHERE id = $id;";
 
 
 if(mysqli_query($con,$sql)){
 echo 'Biodata Updated Successfully';
 }else{
 echo 'Could Not Update Biodata Try Again';
 }
 
 
 mysqli_close($con);
 }

?>