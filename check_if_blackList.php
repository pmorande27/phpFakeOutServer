<?php 
header('Access-Control-Allow-Origin: *');
include 'connexion.php';

$received_url = $_GET['url'];
if (!isset($received_url)){
	$return = Array();
    $return["success"] = "/";
    echo json_encode($return);
	}
//$received_url = $_POST['url'];
//Search in blackList.
else{
$query = "SELECT * FROM BlackList where LINK = '$received_url'";
//Search in valid_list.
$query2 = "SELECT * FROM WhiteList where SOURCE = '$received_url'";
$result = $connexion -> query($query2);

$result2 = $connexion -> query($query);
if ($result -> fetch_assoc()){
	$return = Array();
    $return["success"] = 100;
    echo json_encode($return);
}
else{
	if($result2 ->fetch_assoc()){
		$return = Array();
   	 	$return["success"] = 0;
    	echo json_encode($return);
 
	}
	else{
	$return = Array();
    $return["success"] = 50;
    echo json_encode($return);
	}
}
}


$connexion -> close();


  ?>