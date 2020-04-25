<?php
$hostname='localhost';
$database ='test_data';
$username = 'root';
$password ='fakeoffserver';

$connexion =new mysqli($hostname,$username,$password, $database);
if($connexion -> connect_errno){
    echo "Error in the connexion";
}

?>