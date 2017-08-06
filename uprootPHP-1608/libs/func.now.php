<?php
function now(){
	$n = func_get_args();
	global $_time;
	if(count($n) < 1){$t = $_time;}
	else{$t = $n['0'];}
	if($t === null || $t === '' || $t == ' '){$t = 'America/Los_Angeles';}
	date_default_timezone_set($t);
	return date('Y-m-d H:i:s', time());
}
?>
