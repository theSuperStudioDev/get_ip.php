<?php
header("Content-Type: application/json");
$ip = $_SERVER['REMOTE_ADDR'];
echo json_encode(array("ip" => $ip));
?>
