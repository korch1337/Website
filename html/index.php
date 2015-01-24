<?php require_once 'engine/init.php'; include 'layout/overall/header.php';


	/ Most powerful guilds for TFS 0.3/4 and 1.0
////////////////////////
// Create a cache file to avoid high SQL load
$cache = new Cache('engine/cache/guilds');
if ($cache->hasExpired()) {
    // Fetch guild data
  
if ($config['TFSVersion'] == 'TFS_03') $guilds = mysql_select_multi('SELECT `g`.`id` AS `id`, `g`.`name` AS `name`, COUNT(`g`.`name`) as `frags` FROM `killers` k LEFT JOIN `player_killers` pk ON `k`.`id` = `pk`.`kill_id` LEFT JOIN `players` p ON `pk`.`player_id` = `p`.`id` LEFT JOIN `guild_ranks` gr ON `p`.`rank_id` = `gr`.`id` LEFT JOIN `guilds` g ON `gr`.`guild_id` = `g`.`id` WHERE `k`.`unjustified` = 1 AND `k`.`final_hit` = 1 GROUP BY `name` ORDER BY `frags` DESC, `name` ASC LIMIT 0, 3;');
elseif ($config['TFSVersion'] == 'TFS_10') $guilds = mysql_select_multi('SELECT `g`.`id` AS `id`, `g`.`name` AS `name`, COUNT(`g`.`name`) as `frags` FROM `players` p LEFT JOIN `player_deaths` pd ON `pd`.`killed_by` = `p`.`name` LEFT JOIN `guild_membership` gm ON `p`.`id` = `gm`.`player_id` LEFT JOIN `guilds` g ON `gm`.`guild_id` = `g`.`id` WHERE `pd`.`unjustified` = 1 GROUP BY `name` ORDER BY `frags` DESC, `name` ASC LIMIT 0, 3;');
    $cache->setContent($guilds);
    $cache->save();
} else {
    $guilds = $cache->load();
}
if (!empty($guilds) || !$guilds) {
    $divsize = 400;
    ?>
    <!-- No table design -->
    <center><h1>Most powerful guilds</h1></center>
    <div style="margin: auto; width: <?php echo $divsize; ?>px;">
        <?php
        $number = 1;
        foreach ($guilds as $guild) {
            ?>
            <div style="float: left; width: <?php echo (int)$divsize / 3; ?>px;">
                <a href="guilds.php?name=<?php echo $guild['name']; ?>"><img style="max-width: <?php echo (int)$divsize / 3; ?>px;" src="medals/<?php echo $number; ?>.png" alt="<?php echo $number; ?>"><br>
                <center><b><?php echo $guild['name']; ?></b><br>
                Kills: <?php echo $guild['frags']; ?></center></a>
            </div>
            <?php
            $number++;
        }
        ?>
    </div>
    <!-- With table design -->
    <table id="news">
        <tr class="yellow">
            <td class="zheadline"><center><b>Most powerful guilds</b></center></td>
        </tr>
        <tr>
            <td>
                <div style="margin: auto; width: <?php echo $divsize; ?>px;">
                    <?php
                   $number = 1;
                   foreach ($guilds as $guild) {
                       ?>
                       <div style="float: left; width: <?php echo (int)$divsize / 3; ?>px;">
                           <a href="guilds.php?name=<?php echo $guild['name']; ?>"><img style="max-width: <?php echo (int)$divsize / 3; ?>px;" src="medals/<?php echo $number; ?>.png" alt="<?php echo $number; ?>"><br>
                           <center><b><?php echo $guild['name']; ?></b><br>
                           Kills: <?php echo $guild['frags']; ?></center></a>
                       </div>
                       <?php
                       $number++;
                   }
                   ?>
               </div>
            </td>
        </tr>
    </table> -->
    
<?php
}
// End powerful guilds

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
