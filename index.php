<?php

$gitmodel = "https://github.com/demoxu/xxxxxx.git";
$gitFile = "git.txt";

$rows = array ();
$handle = fopen ( $gitFile, "r" );
if ($handle) {
	while ( ! feof ( $handle ) ) {
		$buffer = fgets ( $handle, 65535 );
		echo "git clone ".str_replace('xxxxxx', trim($buffer), $gitmodel)." && ";
// 		echo "<br/>";
		$rows [] = $buffer;
	}
	fclose ( $handle );
}

;
