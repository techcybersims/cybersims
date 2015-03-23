<?php
$db = new mysqli('localhost', 'root','l00k@me','beta');
if ($db->connect_error) {
	$error = $db->connect_error;
}
$db->set_charset('utf8');
