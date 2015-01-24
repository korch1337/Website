<img src="layout/images/titles/t_news.png"/>

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
<table>

<?php
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
		);

		foreach ($tags as $tag => $value) {
			$code = preg_replace('/placeholder([0-9]+)/', '(.*?)', preg_quote(preg_replace('/\{\$([0-9]+)\}/', 'placeholder$1', $tag), '/'));
			$string = preg_replace('/'.$code.'/i', $value, $string);
		}

		return $string;
	}
	echo '<div id="news">';
	foreach ($news as $n) {
		?>
<tr><td class="znewsdate"><?php echo date('l, d M Y', $n['date']); ?></td></tr>
<tr><td class="zheadline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo TransformToBBCode($n['title']); ?></td></tr>
<tr><td class="znewsbody" colspan="2"><?php echo TransformToBBCode(nl2br($n['text'])); ?></td></tr>
<tr><td class="znewsdate">by <a href="characterprofile.php?name=<?php echo $n['name']; ?>"><?php echo $n['name']; ?></a></td><td></td></tr>
<tr><td class="znewsdate" style="border-bottom:1px solid #000000;" colspan="2"></td></tr>
<tr><td class="znewsdate" colspan="2"></td></tr>
		<?php
	}
	echo '</div>';
}
?>
</table>
