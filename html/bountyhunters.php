<?php

#########################
# BOUNTY HUNTERS SCRIPT #
#  MADE FOR MODERN AAC  #
#      BY ARCHEZ        #
#########################
#  HTTP://ARCHEZOT.COM  #
#########################
#  RESPECT THE CREDITS  #
#########################

require("config.php");
$ots = POT::getInstance();
$ots->connect(POT::DB_MYSQL, connection());
$SQL = $ots->getDBHandle();

# Tables
$a = '#c6c6c6';
$b = '#d5d5d5';
$c = '#e4e4e4';

# Data
$list = $SQL->query('SELECT * FROM `bounty_hunters` ORDER by `id` DESC');

echo '<table border="0" cellspacing="1" width="100%">
<tr bgcolor="'.$a.'"><td width="3%">#</td><td width="20%"><b>Hunted by</b></td><td width="15%" colspan="2"><b>Reward</b></td><td width="20%"><b>Hunted player</b></td><td width="20%"><b>Killed by</b></td></tr>';

$datalist = 0;
foreach($list as $data) {
    if(is_int($datalist / 2))
        $bgcolor = $b;
            else
        $bgcolor = $c;
$datalist++;

$huntedby = $SQL->query('SELECT * FROM `players` WHERE `id` = '.$data['fp_id'].'')->fetch();
$huntedplayer = $SQL->query('SELECT * FROM `players` WHERE `id` = '.$data['sp_id'].'')->fetch();
$killedby = $SQL->query('SELECT * FROM `players` WHERE `id` = '.$data['k_id'].'')->fetch();

if($killedby == 0) { $killedby['name'] = 'STILL ALIVE'; }

echo '<tr bgcolor="'.$bgcolor.'"><td><span style="font-size:11px;color:#a8a8a8;">'.$datalist.'</span></td><td><a href="/index.php/character/view/'.strtolower($huntedby['name']).'"><span style="font-size:11px;">'.strtoupper($huntedby['name']).'</span></a></td><td><span style="font-size:11px;color:#909090;">'.$data['prize'].'</span></td><td><span style="font-size:11px;">GOLD</span></td><td><a href="/index.php/character/view/'.strtolower($huntedplayer['name']).'"><span style="font-size:11px;">'.strtoupper($huntedplayer['name']).'</a></td><td><a href="/index.php/character/view/'.strtolower($killedby['name']).'"><span style="font-size:11px;">'.strtoupper($killedby['name']).'</a></td></tr>';
}
echo '</table>';

?> 
