<?php 
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","website_ivymoda");
/* $user= "root";
$dbname = "website_ivymoda";
$pass = "";
$host = "localhost"; */
// $conn = new mysqli($severname, $username,$password,$database);
/* $conn = new mysqli($host, $user, $pass, $dbname); */
if($conn->connect_error){
  die ("Ket noi that bai" . $conn->connect_error);
}
?>