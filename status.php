<?php
require_once 'config.php';

// show statuses
$statuses = $facebook->api('/me/statuses');
foreach($statuses['data'] as $status)
{
	echo $status["message"], "<br />";
}