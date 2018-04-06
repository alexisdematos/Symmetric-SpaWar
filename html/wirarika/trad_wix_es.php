<?php

	$phrase = ($_POST['text']);

$command = escapeshellcmd('/var/www/cgi-bin/client_wix_es.py "'.$phrase.'"');
$output = shell_exec($command);
echo $output;

?>