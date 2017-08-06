<?php
	if(database::update("select 1 from `views`;") != 1){
		$sql = 'SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";';
		$sql.= 'SET time_zone = "+00:00";';
		$sql.= 'CREATE TABLE `views` (';
		$sql.= '  `id` int(11) NOT NULL,';
		$sql.= '  `numbs` int(11) NOT NULL,';
		$sql.= '  `page` varchar(255) NOT NULL,';
		$sql.= '  `dates` int(11) NOT NULL';
		$sql.= ') ENGINE=MyISAM DEFAULT CHARSET=latin1;';
		$sql.= 'ALTER TABLE `views` ADD PRIMARY KEY (`id`);';
		$sql.= 'ALTER TABLE `views` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;';
		database::update($sql);
	}else{
		$page = database::escape($_SERVER['REDIRECT_URL']);
		$temp = explode(' ', now());
		$dates = preg_replace('/\D/', '', $temp[0]);
		$numbs = database::select_var("SELECT numbs FROM `views` WHERE page='$page' AND dates='$dates' LIMIT 1");
		if(strpos($_SERVER['REDIRECT_URL'], '.') !== false){
			// Do nothing because it is a resource
		}else{
			if(strlen($numbs) < 1 || $numbs === null){
				database::insert("INSERT INTO `views`(`numbs`, `page`, `dates`) VALUES ('1','$page','$dates')");
			}else{
				$numbs = $numbs + 1;
				database::update("UPDATE `views` SET `numbs`='$numbs' WHERE `page`='$page' AND `dates`='$dates' LIMIT 1");
			}
		}
	}
?>
