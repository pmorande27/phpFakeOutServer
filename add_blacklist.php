<?php
header('Access-Control-Allow-Origin: *');

include 'connexion.php';
$url = $_GET['url'];
//$url= "test";
//$url = $_GET['url'];
$Confirmed = 0;
if(isset($url)){
	$query = "INSERT INTO BlackList (LINK,CONFIRMED)VALUES ('$url','$Confirmed')";
}

$result = $connexion->query($query);
if($result){
	$return = Array();
    $return["success"] = true;
    echo json_encode($return);

}
else{
	$return = Array();
    $return["success"] = false;
    echo json_encode($return);
}

?>