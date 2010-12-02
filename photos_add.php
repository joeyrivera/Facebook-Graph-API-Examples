<?php
require_once 'config.php';

$img = realpath("C:\\path\\to\\file.jpg");

// allow uploads
$facebook->setFileUploadSupport("http://" . $_SERVER['SERVER_NAME']);

// add a status message
$photo = $facebook->api('/me/photos', 'POST', 
	array(
		'source' => '@' . $img,
		'message' => 'This photo came from my app.'
	)
);

var_dump($photo);