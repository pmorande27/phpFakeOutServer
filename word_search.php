<?php 

header('Access-Control-Allow-Origin: *');
include 'connexion.php';

$word1 =  $_GET['word1'];
$word2 =  $_GET['word2'];
$word3 =  $_GET['word3'];
$word4 =  $_GET['word4'];
$word5 =  $_GET['word5'];
//$word1 =  "University";
//$word2 =  "out";
//$word3 =  "Johns";
//$word4 = "has";
//$word5 =  "public";
if (isset($word1) && isset($word2) && isset($word3) && isset($word4) && isset($word5) ){
//$word1 = $wor1 . " ";
//$word2 = $wor2 . " ";
//$word3 = $wor3 . " ";
//$word4 = $wor4 . " ";
//$word5 = $wor5 . " ";


$query ="SELECT SOURCE from WhiteList where INFORMATION LIKE '%$word1%' AND INFORMATION LIKE '%$word2%'AND INFORMATION LIKE '%$word3%' AND INFORMATION LIKE '%$word4%'AND INFORMATION LIKE '%$word5%'";
$result = $connexion -> query($query);
	if($result->num_rows == 0)
    {
        echo json_encode (json_decode ("{}"));
    }
    else{
    	while($row = mysqli_fetch_assoc($result)){
			$product[] = array_map('utf8_encode',$row);
		}
		echo json_encode ($product);
	}
  }


$connexion->close();
 ?>

