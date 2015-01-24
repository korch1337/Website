<?php
/* Znote AAC Sub System
    -    Used to create custom pages
    -    Place the contents of the page in /layout/sub/ folder.
        : You don't need to include init, header or footer. 
        Its already taken care of, just write the contents you want.

    Then add that page to the configuration below. Config syntax:
    'PAGENAME' => array(
        'file' => 'fileName.php',
        'override' => false
    ),
    ................
    There are 2 ways to view your page, by using sub.php file, or by overriding an existing default page.
    1: yourwebiste.com/sub.php?page=PAGENAME
    2: By having override => true, then it will load your sub file instead of the default znote aac file. 

*/

$subpages = array(
    'houses' => array(
        'file' => 'houses.php',
        'override' => true
    ),
    'index' => array(
        'file' => 'index.php',
        'override' => true
    ),
    'recover' => array(
        'file' => 'recover.php',
        'override' => true
    ),
    'charactersearch' => array(
        'file' => 'charactersearch.php',
        'override' => true
    ),
    'highscore' => array(
        'file' => 'highscore.php',
        'override' => true
    ),
    'loggedin' => array(
        'file' => 'loggedin.php',
        'override' => true
    ),
    'whoisonline' => array(
        'file' => 'whoisonline.php',
        'override' => true
    ),
    'map' => array(
        'file' => 'map.php',
        'override' => true
    ),
    'quests' => array(
        'file' => 'quests.php',
        'override' => true
    ),
	'bountyhunters' => array(
        'file' => 'bountyhunters.php',
        'override' => true
	),
    'experiencetable' => array(
        'file' => 'experiencetable.php',
        'override' => true
    ),
);
?>