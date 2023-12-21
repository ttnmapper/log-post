<?php
$method = $_SERVER['REQUEST_METHOD'];

$logfile = 'logs/'.$method."_".date('Y-m-d H_i_s').'.txt';

$server = json_encode($_SERVER, JSON_PRETTY_PRINT);
file_put_contents($logfile, "Server:\n".$server."\n\n", FILE_APPEND | LOCK_EX);

$headers = json_encode(getallheaders(), JSON_PRETTY_PRINT);
file_put_contents($logfile, "Headers:\n".$headers."\n\n", FILE_APPEND | LOCK_EX);

$received = file_get_contents('php://input');
file_put_contents($logfile, "Body:\n===\n".$received."\n===", FILE_APPEND | LOCK_EX);

?>