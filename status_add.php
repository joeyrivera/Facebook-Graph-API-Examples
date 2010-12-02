<?php
require_once 'config.php';

// add a status message
$status = $facebook->api('/me/feed', 'POST', array('message' => 'This post came from my app.'));

var_dump($status);