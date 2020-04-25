<?php 
include 'connexion.php';
//$word = $_POST['word'];
$word = "Fact";
//%word = &_GET['word'];
$query = "SELECT SOURCE from WhiteList where INFORMATION LIKE '%Fact:%' ";
$result = $connexion -> query($query);
if (!mysqli_fetch_assoc($result)){
	echo json_encode (json_decode ("{}"));
}
else{
while($row = mysqli_fetch_assoc($result)){
	$product[] = array_map('utf8_encode',$row);
}

	echo json_encode ($product);

}

$connexion->close();
 ?>

