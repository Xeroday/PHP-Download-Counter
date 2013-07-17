<?php
require_once('config.php');

if (isset($_REQUEST['file'])) {
	$filename = $_REQUEST['file'];
	$filepath = $filefolder . $filename;
	$statspath = $statsfolder . $filename . ".txt";
	if (file_exists($filepath)) {
		@file_put_contents($statspath, $clientInfo, FILE_APPEND);
		header("Location: " . $filepath);
	}
}
exit('Bad request');
?>