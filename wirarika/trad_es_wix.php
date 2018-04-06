<?php

	$phrase = ($_POST['text']);

$command = escapeshellcmd('/var/www/cgi-bin/client_es_wix.py "'.$phrase.'"');
$output = shell_exec($command);
echo $output;

?>