<?php 
include 'connexion.php';
//$word = $_POST['word'];
$word = "Fact";
//%word = &_GET['word'];
//$query = "SELECT SOURCE from WhiteList where INFORMATION LIKE '%$word%' ";
$query = "SELECT SOURCE from WhiteList where INFORMATION CONTAINS '$word' ";
$result = $connexion -> query($query);
while($row = mysqli_fetch_assoc($result)){
	$product[] = array_map('utf8_encode',$row);
}
if (!mysqli_fetch_assoc($result)){
	echo json_encode (json_decode ("{}"));
}
else{
	echo json_encode ($product);
}
$connexion->close();
 ?>

