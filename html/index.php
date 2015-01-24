<?php require_once 'engine/init.php'; include 'layout/overall/header.php';
// Front page server information box by Raggaer. Improved by Znote. (Using cache system and Znote SQL functions)
// Create a cache system
$infoCache = new Cache('engine/cache/serverInfo');
$infoCache->setExpiration(60); // This will be a short cache (60 seconds)
if ($infoCache->hasExpired()) {

    // Fetch data from database
    $data = array(
        'newPlayer' => mysql_select_single("SELECT `name` FROM `players` ORDER BY `id` DESC LIMIT 1"),
        'bestPlayer' => mysql_select_single("SELECT `name`, `level` FROM `players` ORDER BY `experience` DESC LIMIT 1"),
        'playerCount' => mysql_select_single("SELECT COUNT(`id`) as `count` FROM `players`"),
        'accountCount' => mysql_select_single("SELECT COUNT(`id`) as `count` FROM `accounts`"),
        'guildCount' => mysql_select_single("SELECT COUNT(`id`) as `count` FROM `guilds`")
    );

    // Initiate default values where needed
    if ($data['playerCount'] !== false && $data['playerCount']['count'] > 0) $data['playerCount'] = $data['playerCount']['count'];
    else $data['playerCount'] = 0;
    if ($data['accountCount'] !== false && $data['accountCount']['count'] > 0) $data['accountCount'] = $data['accountCount']['count'];
    else $data['accountCount'] = 0;
    if ($data['guildCount'] !== false && $data['guildCount']['count'] > 0) $data['guildCount'] = $data['guildCount']['count'];
    else $data['guildCount'] = 0;

    // Store data to cache
    $infoCache->setContent($data);
    $infoCache->save();
} else {
    // Load data from cache
    $data = $infoCache->load();
}
?>

<!-- Render HTML for server information -->
<table border="0" cellspacing="0">
    <tr class="yellow">
        <td><center>Server Information</center></td>
    </tr>
    <tr>
        <td>
            <center>Welcome to our newest player:
                <a href="characterprofile.php?name=<?php echo $data['newPlayer']['name']; ?>">
                    <?php echo $data['newPlayer']['name']; ?>
                </a>
            </center>
        </td>
    </tr>
    <tr>
        <td>
            <center>The best player is:
                <a href="characterprofile.php?name=<?php echo $data['bestPlayer']['name']; ?>">
                    <?php echo $data['bestPlayer']['name']; ?>
                </a> level: <?php echo $data['bestPlayer']['level']; ?> congratulations!
            </center>
        </td>
    </tr>
    <tr>
        <td>
            <center>We have <b><?php echo $data['accountCount']; ?></b> accounts in our database, <b><?php echo $data['playerCount']; ?></b> players, and <b><?php echo $data['guildCount']; ?></b> guilds </center>
        </td>
    </tr>
</table>


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
			} else echo "";
		}
		
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
			echo '<p>Patrik luktar bajs</p>';
		}
	}
include 'layout/overall/footer.php'; ?>
