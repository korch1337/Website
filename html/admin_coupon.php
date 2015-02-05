<?php 
	require_once 'engine/init.php'; include 'layout/overall/header.php'; 
	protect_page();
	admin_only($user_data);

	// From Felony
	function serialKey()
	{
		$template = 'XX99-XX99-99XX-99XX-XXXX-99XX';
		$k = strlen($template);
		$sernum = '';
		for ($i=0; $i<$k; $i++)
		{
			switch($template[$i])
			{
				case 'X': $sernum .= chr(rand(65,90)); break;
				case '9': $sernum .= rand(0,9); break;
				case '-': $sernum .= '-';  break; 
			}
		}
		return $sernum;
	}

	if (isset($_POST['points'])) {

		$error = false;
		$points = $_POST['points'];

		if (empty($points)) {
			$error[] = "<font color='red'>Field cannot be empty</font>";
		}

		if (!is_numeric($points)) {
			$error[] = "<font color='red'>Must be a number value</font>";
		}

		if (!empty($error)) {

			foreach ($error as $err) {
				echo $err.'<br>';
			}

		}

		if (empty($error)) {
			// Success
			$key = serialKey();
			$query = "INSERT INTO `__cornex_redeem` (`code`, `points`, `used_by`, `time`, `ip`) VALUES ('".$key."','".$points."', 0, 0, 0)";
			mysql_update($query);
			echo '<p><p> <b>Key generated</b><font color="red">: '.$key.'</font>';
		}

	}

?>

<form action="" method="POST">
	
	<label>Points</label>
	<input type="text" name="points"><br>
	<input type="submit" value="Create code">

</form>

<?php include 'layout/overall/footer.php'; ?>
