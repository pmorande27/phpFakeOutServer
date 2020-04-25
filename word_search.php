<?php 
include 'connexion.php';
//$word = $_POST['word'];
$word = "edjtgwogrjeoijhoerhgwoighegoirhOGWHRVOLDJIGOIEWJHGOWEHRJOGisdjofgiehwoigfhweoghjoivji";
$word = $word;
if (isset($word)){
$query = "SELECT SOURCE from WhiteList where INFORMATION LIKE '%$word%' ";
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
}
else{
	echo json_encode (json_decode ("{}"));
}



$connexion->close();
 ?>

