<?php 
//establish a connection between databse and php scripts


$db = new Mysqli;

$db->connect('localhost','root','123gaurangB','crud');

if(!$db){

	echo "success";
}
else{
	echo "not connection";
}


?>