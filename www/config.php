<?php
$filefolder = 'files/'; //Include trailing slash
$statsfolder = 'stats/';

$nixWithExec = true; //Set to true if server is running on a *nix system with PHP exec enabled for faster stats

date_default_timezone_set('America/New_York'); //List of time zones: http://www.php.net/manual/en/timezones.php

$clientInfo = $_SERVER['REMOTE_ADDR'] . " - [" . date('j/M/Y:G:i:s T')  . "] - '" . $_SERVER['HTTP_USER_AGENT'] . "' - " . $_SERVER['HTTP_REFERER'] . "\n"; 
?>