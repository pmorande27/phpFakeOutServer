<?php
include 'connexion.php';
//$url = $_POST['url'];
$url= "hola";
//$url = $_GET['url'];
$Confirmed = 0;
$query = "INSERT INTO BlackList VALUES ('$url','$Confirmed')";
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