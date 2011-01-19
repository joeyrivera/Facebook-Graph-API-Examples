<?php
require_once 'config.php';

$return = $facebook->api(array('method' => 'users.isappuser'));
echo (string)$return;