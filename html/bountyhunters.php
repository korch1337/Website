<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; 
foreach($SQL->query('SELECT A.* , B.name AS hunted_by, C.name AS player_hunted, D.name AS killed_by
                        FROM bounty_hunters AS A
                        LEFT JOIN players AS B ON A.fp_id = B.id
                        LEFT JOIN players AS C ON A.sp_id = C.id
                        LEFT JOIN players AS D ON A.k_id = D.id
                        ORDER BY A.killed,A.prize DESC') as $bounty) {
        if($num%2 == 0){$color=$config['site']['darkborder'];}else{$color=$config['site']['lightborder'];}
        if ($bounty['killed_by']){
                $killed_by = '<a href="?subtopic=characters&name='.$bounty['killed_by'].'">'.$bounty['killed_by'].'</a>';
        } else {
                $killed_by = 'still alive';
        }
    $b = round($bounty[prize] / 1000000,2);
    $skill = $SQL->query('SELECT * FROM '.$SQL->tableName('players').' WHERE '.$SQL->fieldName('id').' = '.$bounty['sp_id'].'')->fetch();
        
        $num++;
}
if($num == 0){
        $main_content.='<TR BGCOLOR="'.$color.'"><TD colspan=4><center>Currently there are not any bounty hunter offer.</center></TD></TR>';
}
    $main_content .='</TABLE></table>';
    
   
include 'layout/overall/footer.php'; ?>
