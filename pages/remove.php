<?php
$session_id=$_SESSION["session_id"];
$id=$_GET["id"];


$sql = "DELETE FROM Cart WHERE id='$id'";
mysqli_query($con, $sql);



echo "Product has been sucessfully added to the cart";


header("Location: .?sec=pages&page=cart", true, 303);
exit;
?>
