<?php ob_start(); // START BUFFER?>
<?php if($_SESSION['check'] === true || $_SESSION['check'] == '1' || $_SESSION['check'] == 1){$_USER = 'true';}else{$_USER = 'false';}?>
<?php 
	if(strlen($_SERVER['REDIRECT_URL']) > 1){$page = $_SERVER['REDIRECT_URL'];}
	else{$page = '/Home';}
	$page = str_replace('/',' - ',$page);

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keyword" content="">
<meta name="author" content="Dirobu">
<link rel="icon" href="img/logo/favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="img/logo/favicon.ico" type="image/x-icon"/>
<title>Website <?=$page;?></title>
<script src="<?=$_HREF;?>js/jquery-3.2.1.min.js"></script>
<script src="<?=$_HREF;?>js/scene-1702.min.js"></script>
<script src="<?=$_HREF;?>js/toTop-1707.min.js"></script>
<link rel="stylesheet" href="<?=$_HREF;?>css/uprootCSS-1704-colors.min.css">
<link rel="stylesheet" href="<?=$_HREF;?>css/uprootCSS-1704-elements.min.css">
<link rel="stylesheet" href="<?=$_HREF;?>css/uprootCSS-1704-grid.min.css">
<link href="<?=$_HREF;?>fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body class="wide tall text-center disp-box">
	<?php
		bind();
		ob_flush(); // FLUSH BUFFER
	?>
</body>
</html>
