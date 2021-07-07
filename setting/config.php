 <?php
session_start();
$_SESSION["session_id"]=34;
$con=mysqli_connect("localhost","root","","organomass");
if(!$con){
	echo "connection FAIL";
}
?>