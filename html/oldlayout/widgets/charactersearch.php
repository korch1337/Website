<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;
?>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="distribution" content="Global" />
		<meta name="author" content="Vean" />
		<meta name="robots" content="index,follow" />
		<meta name="description" content="Site Description." />
		<meta name="keywords" content="ots, open tibia server, guilcera, forgotten server" />
	<title><?PHP echo $config['site_title'];?> - <?PHP echo $config['site_title_context'];?></title>
<link rel="stylesheet" type="text/css" href="layout/main.css" />
<link href="layout/favicon.ico" rel="shortcut icon" />
</head>
<body>
<div class="m_position"> 
	<img src="layout/images/logo.png" alt="<?PHP echo $config['site_title'];?> logo"/>
	<img src="layout/images/head.png"/>
		<div class="m_center">
			<?php include('layout/left_menu.php'); ?>
			<div class="m_content">
	<h1><font size="5">Character Search</font></h1>
	<div class="inner">
		<li><font size="3">Character Name:<br></font>
		<form type="submit" action="characterprofile.php" method="get">
			<li><input type="text" name="name" class="search"><br><br>
						<?php
				/* Form file */
				Token::create();
			?>
			<li><input type="submit" value="Search">
			
		</form>
	</div>
</div>
	<div style="clear:both;"></div>
	<div id="m_footer">
		<img src="layout/images/foot.png">
		<center><p>Guilcera Layout Peonso. Engine <a href="credits.php">Znote AAC</a><br>Tibia copyrighted by CipSoft GmbH.<br></p></center>
	</div>
</div>				
</body>
</html>