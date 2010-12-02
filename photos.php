<?php
require_once 'config.php';

// get albums
$albums = $facebook->api('/me/albums');

foreach($albums['data'] as $album)
{
	// get all photos for album
	$photos = $facebook->api("/{$album['id']}/photos");
	
	foreach($photos['data'] as $photo)
	{
		echo "<img src='{$photo['source']}' />", "<br />";
	}
}