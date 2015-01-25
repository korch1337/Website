<?php 
#    Online Players Records for ZnoteAAC
#    By cbrm @ otland.net

require_once 'engine/init.php'; include 'layout/overall/header.php';
echo'<h1>Online Players Records</h1>';
$record = mysql_query('SELECT * FROM `server_record` ORDER BY `record` DESC LIMIT 20;');
while ($row = mysql_fetch_assoc($record)) {$data[] = $row;}
if (empty($data)) {echo 'This server is not born yet.'; return include 'layout/overall/footer.php';}
?>

<center>
    Max amount of online players was of <?php echo $data[0]['record'] ?> players on <?php echo date("M j Y", $data[0]['timestamp']) ?>
</center>

<table>
<tr class="yellow">
    <td width="30%">
        <span style="font-weight:bold;">Players</span>
    </td>
    <td width="70%">
        <span style="font-weight:bold;">Date</span>
    </td>
</tr>

<?php
foreach($data as $record):
    echo'<tr><td>'.$record['record'].'</td>';
    echo'<td>'.date("M j Y, H:i:s T", $record['timestamp']).'</td></tr>';
endforeach;
echo'</table>'; include 'layout/overall/footer.php'; ?>
