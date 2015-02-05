<?php 
	require_once 'engine/init.php';
	protect_page();
	include 'layout/overall/header.php'; 

	if (isset($_POST['code'])) {

		$code = mysql_znote_escape_string($_POST['code']);
		$query = "SELECT * FROM `__cornex_redeem` WHERE `code` = '${code}' LIMIT 1;";

		$res = mysql_select_multi($query);
		// Key exist in database
		if ($res !== false) {
			$res = $res[0];

			if ($res['used_by'] != 0) {
				$error[] = 'Key has already been used';
			}

			if (!empty($error)) {

				foreach ($error as $err) {
					echo $err.'<br>';
				}

			}

			if (empty($error)) {

				$used_by = mysql_znote_escape_string($user_data['name']);
				$ip = ip2long(getIP());
				$time = time();
				$code = $res['code'];
				$points = $res['points'];
				$accid = $user_data['id'];
				$query = "UPDATE `__cornex_redeem` SET `used_by` = $used_by , `time` = $time , `ip` = $ip WHERE `code` = '$code'";
				$query2 = "UPDATE `znote_accounts` SET `points` = `points` + $points WHERE `account_id` = $accid LIMIT 1;";
				mysql_update($query);
				mysql_update($query2);
				echo $points.' points has been added to your account!';

			}

		} else {
			echo 'Key is not valid';
		}

	}

?>

<form action="" method="POST">
	
	<input type="text" name="code">
	<input type="submit" value="Redeem">

</form>
	
<?php include 'layout/overall/footer.php'; ?>
