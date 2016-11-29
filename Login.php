<?php
// require_once('dbConnect.php');

define('HOST','localhost');
define('USER','root');
define('PASS','chanyeol1');
define('DB','sh');

$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');


$username = $_POST['username'];
$password = $_POST['password'];
 
$sql = "SELECT * FROM users WHERE username ='$username' and password ='$password'";
 

$res = mysqli_query($con,$sql);
 
$check = mysqli_fetch_array($res);
 
if(isset($check)){
echo 'success';
}else{
echo 'failure';
}
 
mysqli_close($con);

// $statement = mysqli_prepare($con, "SELECT * FROM users WHERE username = ? AND password = ?");
// mysqli_stmt_bind_param($statement, "ss", $username, $password);
// mysqli_stmt_execute($statement);

// mysqli_stmt_store_result($statement);
// mysqli_stmt_bind_result($statement, $username, $password);

// $response = array();
// $response = array["success"] = false;

// while (mysqli_stmt_fetch($statement)) {

// 	$response["success"] = true;
// 	$response["username"] = $username;
// 	$response["password"] = $password;

// }

// echo json_encode($response);



?>