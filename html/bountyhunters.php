<?php
$main_content .= 
    <TABLE BORDER=0 CELLPADDING=4 CELLSPACING=1 WIDTH=100%>
        <TR>
            <TD style="text-align:center;"><H2>Bounty Hunters</H2></TD>
        </TR>
        <TR BGCOLOR="'.$config['site_title']['vdarkborder'].'">
            <TD><CENTER><FONT COLOR=WHITE SIZE=2><b>How to use...</b></FONT></CENTER></TD>
        </TR> 
        <TR BGCOLOR="'.$config['site_title']['darkborder'].'">
            <TD style="text-align:center;"><b>!hunt prize,nick</b>
       <br><font color="red">It is important to right exactly like this <b>prize,nick</b> with no spaces after the comma.</font>
            <br><i>Example: !hunt 1000000,Player_name
            <br> Will Pay 1KK(1,000,000 gold Pieces) for the Player who Kills Player_name.</i>
<br><b>1kk = 1,000,000 gold</b>
<br><b><font color="green">Money is added to your bank account automatically if you get a Bounty Kill.</font></b></TD>
        </TR> 
</TABLE><br><br><table> 

$main_content .= 
        <TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%>
            <TR BGCOLOR="#505050">
                <TD CLASS=white width=28%>
                    <center><B>Hunted by</B></center>
                </TD>
                <TD CLASS=white width=14%>
                    <center><B>Reward</B></center>
                </TD>
                <TD CLASS=white width=28%>
                    <center><B>Player hunted</B></center>
                </TD>
        <TD CLASS=white><b>Outfit</b></TD>
                <TD CLASS=white width=28%>
                    <center><B>Killed by</B></center>
                </TD>
            </TR>;
foreach($SQL->query(SELECT A.* , B.name AS hunted_by, C.name AS player_hunted, D.name AS killed_by
                        FROM bounty_hunters AS A
                        LEFT JOIN players AS B ON A.fp_id = B.id
                        LEFT JOIN players AS C ON A.sp_id = C.id
                        LEFT JOIN players AS D ON A.k_id = D.id
                        ORDER BY A.killed,A.prize DESC) as $bounty) {
        if($num%2 == 0){$color=$config['site_title']['darkborder'];}else{$color=$config['site_title']['lightborder'];}
        if ($bounty['killed_by']){
                $killed_by = '<a href="?subtopic=characters&name='.$bounty['killed_by'].'">'.$bounty['killed_by'].'</a>';
        } else {
                $killed_by = 'still alive';
        }
    $b = round($bounty[prize] / 1000000,2);
    $skill = $SQL->query('SELECT * FROM '.$SQL->tableName('players').' WHERE '.$SQL->fieldName('id').' = '.$bounty['sp_id'].'')->fetch();
        $main_content .= 
                <TR BGCOLOR="'.$color.'">
                    <TD><center><b><a href="?subtopic=characters&name='.$bounty['hunted_by'].'">'.$bounty['hunted_by'].'</a></b></center></TD>
                    <TD><center><b>'.$b.'  kk</b></center></TD>
                    <TD><center><b><a href="?subtopic=characters&name='.$bounty['player_hunted'].'">'.$bounty['player_hunted'].'</a></b></center></TD>
           <TD><div style="position: relative; width: 32px; height: 32px;"><div style="background-image: url(\'http://outfit-images.ots.me/outfit.php?id='.$skill['looktype'].'&addons='.$skill['lookaddons'].'&head='.$skill['lookhead'].'&body='.$skill['lookbody'].'&legs='.$skill['looklegs'].'&feet='.$skill['lookfeet'].'\'); position: absolute; width: 64px; height: 80px; background-position: bottom right; background-repeat: no-repeat; right: 0px; bottom: 0px;"></div></div></TD>
                    <TD><center><b>'.$killed_by.'</b></center></TD>
                </TR>;
        $num++;
}
if($num == 0){
        $main_content.='<TR BGCOLOR="'.$color.'"><TD colspan=4><center>Currently there are not any bounty hunter offer.</center></TD></TR>';
}
    $main_content .='</TABLE></table>';
?>
