<?php
	print "<a href=\"phpinfo.php\">phpinfo</a><br>\n";
	print "<hr>\n";
	print "<pre>". htmlentities(print_r([
		'_SERVER' => $_SERVER,
		'_ENV' => $_ENV,
		'_POST' => $_POST,
		'_GET' => $_GET,
	], true)) ."</pre>\n";