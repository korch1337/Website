<?php require_once 'engine/init.php'; include 'layout/overall/header.php';



	if (!isset($_GET['page'])) {
		$page = 0;
	} else {
		$page = (int)$_GET['page'];
	}

	if ($config['allowSubPages'] && file_exists("layout/sub/index.php")) include 'layout/sub/index.php';
	else {
		if ($config['UseChangelogTicker']) {
			//////////////////////
			// Changelog ticker //
			// Load from cache
			$changelogCache = new Cache('engine/cache/changelog');
			$changelogs = $changelogCache->load();

			if (isset($changelogs) && !empty($changelogs) && $changelogs !== false) {
				?>
				<table id="changelogTable">
					<tr class="yellow">
						<td colspan="2">Latest Changelog Updates (<a href="changelog.php">Click here to see full changelog</a>)</td>
					</tr>
					<?php
					for ($i = 0; $i < count($changelogs) && $i < 5; $i++) {
						?>
						<tr>
							<td><?php echo getClock($changelogs[$i]['time'], true, true); ?></td>
							<td><?php echo $changelogs[$i]['text']; ?></td>
						</tr>
						<?php
					}
					?>
				</table>
				<?php
			} else echo "No changelogs submitted.";
		}
		echo '<table border="0" cellspacing="0"><tr class="yellow"><td><center>Server Information</center></td></tr>
<tr><td>';
$getshit11 = mysql_query("SELECT `id`, `name` FROM `players` ORDER BY `id` DESC LIMIT 1"); 
$fetchshitt = mysql_fetch_assoc($getshit11); 
$getshit1 = mysql_query("SELECT COUNT(*) as `shit` FROM `players` ");
$fetchshit = mysql_fetch_assoc($getshit1);
$getshit2 = mysql_query("SELECT `name`, `level` FROM `players` ORDER BY `level` DESC LIMIT 1");
$fetchshit2 = mysql_fetch_assoc($getshit2);
$getshit3 = mysql_query("SELECT COUNT(*) as `shiter` FROM `accounts` ");
$fetchshit3 = mysql_fetch_assoc($getshit3);
$getshit4 = mysql_query("SELECT COUNT(*) as `yea` FROM `guilds` ");
$fetchshit4 = mysql_fetch_assoc($getshit4);
echo '<center>Welcome to our newest player: <a href="characterprofile.php?name='.$fetchshitt['name'].'">'.$fetchshitt['name'].'</a></center></td></tr>';
echo '<tr><td><center>The best player is: <a href="characterprofile.php?name='.$fetchshit2['name'].'">'.$fetchshit2['name'].'</a> level: '.$fetchshit2['level'].' congratulations!</center></td></tr>';
echo '<tr><td><center>We have <b>'.$fetchshit3['shiter'].'</b> accounts in our database, <b>'.$fetchshit['shit'].'</b> players, and <b>'.$fetchshit4['yea'].' </b>guilds </center></td></tr>';
echo '</table>';

		$cache = new Cache('engine/cache/news');
		if ($cache->hasExpired()) {
			$news = fetchAllNews();
			$cache->setContent($news);
			$cache->save();
		} else {
			$news = $cache->load();
		}
		
		// Design and present the list
		if ($news) {
			
			$total_news = count($news);
			$row_news = $total_news / $config['news_per_page'];
			$page_amount = ceil($total_news / $config['news_per_page']);
			$current = $config['news_per_page'] * $page;

			function TransformToBBCode($string) {
				$tags = array(
					'[center]{$1}[/center]' => '<center>$1</center>',
					'[b]{$1}[/b]' => '<b>$1</b>',
					'[size={$1}]{$2}[/size]' => '<font size="$1">$2</font>',
					'[img]{$1}[/img]'    => '<a href="$1" target="_BLANK"><img src="$1" alt="image" style="width: 100%"></a>',
					'[link]{$1}[/link]'    => '<a href="$1">$1</a>',
					'[link={$1}]{$2}[/link]'   => '<a href="$1" target="_BLANK">$2</a>',
					'[color={$1}]{$2}[/color]' => '<font color="$1">$2</font>',
					'[*]{$1}[/*]' => '<li>$1</li>',
					'[youtube]{$1}[/youtube]' => '<div class="youtube"><div class="aspectratio"><iframe src="//www.youtube.com/embed/$1" frameborder="0" allowfullscreen></iframe></div></div>',
				);
				foreach ($tags as $tag => $value) {
					$code = preg_replace('/placeholder([0-9]+)/', '(.*?)', preg_quote(preg_replace('/\{\$([0-9]+)\}/', 'placeholder$1', $tag), '/'));
					$string = preg_replace('/'.$code.'/i', $value, $string);
				}
				return $string;
			}
			for ($i = $current; $i < $current + $config['news_per_page']; $i++) {
				if (isset($news[$i])) {
					?>
					<table id="news">
						<tr class="yellow">
							<td class="zheadline"><?php echo getClock($news[$i]['date'], true) .' by <a href="characterprofile.php?name='. $news[$i]['name'] .'">'. $news[$i]['name'] .'</a> - <b>'. TransformToBBCode($news[$i]['title']) .'</b>'; ?></td>
						</tr>
						<tr>
							<td>
								<p><?php echo TransformToBBCode(nl2br($news[$i]['text'])); ?></p>
							</td>
						</tr>
					</table>
					<?php
				} 
			}


			echo '<select name="newspage" onchange="location = this.options[this.selectedIndex].value;">';

			for ($i = 0; $i < $page_amount; $i++) {

				if ($i == $page) {

					echo '<option value="index.php?page='.$i.'" selected>Page '.$i.'</option>';

				} else {

					echo '<option value="index.php?page='.$i.'">Page '.$i.'</option>';
				}
			}
			
			echo '</select>';

		} else {
			echo '<p>No news exist.</p>';
		}
	}
include 'layout/overall/footer.php'; ?>
