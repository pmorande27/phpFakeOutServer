<?php
header('Access-Control-Allow-Origin: *');

include 'connexion.php';
//$url = $_GET['url'];
//$text = $_GET['text'];
//$title = $_GET['title'];
$url = "aaa";
$text = "aaa";
$title = "dgg";
$query = "INSERT INTO WhiteList (SOURCE,TITLE,INFORMATION) VALUES ('$url','$title','$text')";
if (isset($url)&&isset($text)&&isset($title)){
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
}
else{
	echo json_encode(json_decode('{}'));
}
$connexion->close();

?>