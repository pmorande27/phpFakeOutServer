<?php 
include 'connexion.php';
//$word1 =  $GET['word1'];

//$word2 =  $GET['word2'];
//$word3 =  $GET['word3'];
//$word4 =  $GET['word4'];
//$word5 =  $GET['word5'];
$word1 =  "University";
$word2 =  "out";
$word3 =  "Johns";
$word4 = "updates";
$word5 =  "public";
//$word = "edjtgwogrjeoijhoerhgwoighegoirhOGWHRVOLDJIGOIEWJHGOWEHRJOGisdjofgiehwoigfhweoghjoivji";
if (isset($word1) && isset($word2) && isset($word3) && isset($word4) && isset($word5) ){
//$word1 = $wor1 . " ";
//$word2 = $wor2 . " ";
//$word3 = $wor3 . " ";
//$word4 = $wor4 . " ";
//$word5 = $wor5 . " ";

$query ="SELECT SOURCE from WhiteList where INFORMATION LIKE '%University%' AND INFORMATION LIKE '%has%'AND INFORMATION LIKE '%out%' AND INFORMATION LIKE '%Johns%'AND INFORMATION LIKE '%public%'";
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

