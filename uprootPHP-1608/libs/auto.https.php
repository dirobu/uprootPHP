<?php
	function https(){
		if ($_SERVER['HTTPS'] != "on"){
		    header("Location: https://".str_replace('www.','',$_SERVER['HTTP_HOST']).$_SERVER['SCRIPT_URL']);
		    exit;
		}
	}
	https();
?>
