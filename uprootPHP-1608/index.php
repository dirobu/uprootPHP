<?php
	// System
		function bind(){
			global $_BINDER;
			if(strlen($_BINDER[1]) < 1)
			{
				include('pages/index.php');
			}
			else if(file_exists('pages/'.$_BINDER[1].'.php'))
			{
				include('pages/'.$_BINDER[1].'.php');
			}
			else if(file_exists('admin/'.$_BINDER[1].'.php'))
			{
				include('admin/'.$_BINDER[1].'.php');
			}
			else
			{
				include('pages/error.php');
			}
		}
		function href()
		{
			$n = func_get_args();
			if(count($n) < 1)
			{
				global $_BINDER;
				$count = count($_BINDER);
			}
			else
			{
				$count = $n['0'];
			}
		

			$count = $count - 2;
			$temp = '';
			for($f = 0; $f < $count; $f++)
			{
				$temp.= '../';
			}
			return $temp;
		}
	
		$_BINDER = explode('/',$_SERVER['REDIRECT_URL']);
		$_HREF = href(count($_BINDER));

	// Includes
		include('libs/auto.https.php');
		include('libs/func.now.php');		// Function: now(); 
		include('libs/func.database.php');	// Function: database::___	[Requires func.now.php] 
		include('libs/var.nav.php');		// Defines Navigation Variables
		include('libs/auto.views.php');		// Records Views if database is attached. [Requires func.database.php]

	// Routing
		$_POST['ajax'] = database::escape($_POST['ajax']);
		$_GET['ajax'] = database::escape($_GET['ajax']);
		if(isset($_POST['ajax']) && strlen($_POST['ajax']) > 0 && file_exists('ajax/'.$_POST['ajax']))
		{
			include('ajax/'.$_POST['ajax']);
		}
		else if(isset($_GET['ajax']) && strlen($_GET['ajax']) > 0 && file_exists('ajax/'.$_GET['ajax']))
		{
			include('ajax/'.$_GET['ajax']);
		}
		else if(isset($_FILES["file"]["type"]))
		{
			echo json_encode('Invalid Access'); exit();
		}
		else if($_BINDER[1] == 'sitemap.xml')
		{
			include('sitemap.xml');
		}
		else{
			include('template.php');
		}
?>
