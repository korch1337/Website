<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<h1>Sell Character</h1>
<ul>
<li>
				
				Choose Character:<br>
				<select name="selected_character">
				<?php foreach ($available_chars as $chars) { ?>
				<option value="<?php echo $id; ?>"><?php echo vocation_id_to_name($id); ?></option>
				<?php } ?>
				</select>
			</li>
			</ul>

<?php include 'layout/overall/footer.php'; ?>
