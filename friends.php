<?php
require_once 'config.php';

// show friends
$friends = $facebook->api('/me/friends');
var_dump($friends);