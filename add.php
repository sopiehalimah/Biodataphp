<?php 
require_once('dbConnect.php');
 if($_SERVER['REQUEST_METHOD']=='POST'){

 $nama = $_POST['nama'];
 $email = $_POST['email'];
 $alamat = $_POST['alamat'];

 $sql = "INSERT INTO biodata (nama,email,alamat) VALUES ('$nama','$email','$alamat')";

 

 if(mysqli_query($con,$sql)){
 echo 'Biodata Added Successfully';
 }else{
 echo 'Could Not Add Biodata';
 }
 
 mysqli_close($con);
 }

?>