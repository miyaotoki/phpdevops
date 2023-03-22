<?php

$list = array('A','B','C','D','E');
foreach($list as $p){
	if($p == 'C') continue;
	echo "<br>".$p;
}


?>
