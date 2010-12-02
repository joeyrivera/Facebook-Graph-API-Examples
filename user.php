<?php
require_once 'config.php';

$me = $facebook->api('/me');
var_dump($me);