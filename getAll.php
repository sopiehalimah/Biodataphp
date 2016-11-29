<?php

require_once('dbConnect.php');

$sql = "SELECT * FROM biodata";

$r = mysqli_query($con,$sql);

$result = array();
while($row = mysqli_fetch_array($r)){

array_push($result,array(
 "id"=>$row['id'],
 "nama"=>$row['nama'],
 "email"=>$row['email'],
 "alamat"=>$row['alamat']
 ));
 }

 echo json_encode(array('result'=>$result));
 
 mysqli_close($con);
 

?>