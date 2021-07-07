<?php
$session_id=$_SESSION["session_id"];
$id=$_GET["id"];

$sql= "INSERT INTO Cart(session_id, id) VALUES ($session_id, $id) ";
mysqli_query($con, $sql);



echo "Product has been sucessfully added to the cart";


header("Location: index.php", true, 303);
exit;
?>

