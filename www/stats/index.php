<?php
require_once('../config.php');
$files = scandir(".");
$password = $_GET["pass"];
if ($passhash != "" && sha1($password) == $passhash) {
	foreach ($files as $file) {
		if (substr($file, -4) === ".log") {
			if ($nixWithExec) {
				$totalLines = intval(exec('wc -l ' . $file));
			} else {
				$totalLines = 0;
				$handle = fopen($file, "r");
				while(!feof($handle)){
				  $line = fgets($handle);
				  $totalLines++;
				}
				fclose($handle);
				$totalLines = $totalLines - 1; //This method counts the last empty line
			}
			echo substr($file, 0, -4) . ": <a href=$file>" . $totalLines . "</a><br />"; 
		}
	}
}
?>
