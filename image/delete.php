<?php

	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: POST");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
	
	include_once '../config/database.php';
	include_once '../objects/image.php';
	
	$database = new Database();
	$db = $database->getConnection();
	 
	$image = new Image($db);
	
	if(isset($_GET['imageid'])){
		$image_id = $_GET['imageid'];
	} 
	$image->image_id = $image_id;
	
	if($image->delete()){
	    echo '{';
	        echo '"message": "Image was deleted."';
	    echo '}';
	}
	 
	else{
	    echo '{';
	        echo '"message": "Unable to delete image."';
	    echo '}';
	}
?>