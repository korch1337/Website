<?php require_once 'engine/init.php'; include 'layout/overall/header.php';

$records = mysql_select_single('SELECT `value` FROM `server_config` WHERE `config` = "players_record"');
?>
<img src="layout/images/titles/t_plaonline.png"/><p>
<table>
<tr class="yellow"><th>Server Status</th></tr>
<tr><td><b><?php echo $config['site_title'] ?></b> record of players online: <?php echo $records['value'] ?>.</td></tr>
<tr><td><?php
                                $status = true;
                                if ($config['status']['status_check']) {
                                    @$sock = fsockopen ($config['status']['status_ip'], $config['status']['status_port'], $errno, $errstr, 1);
                                    if(!$sock) {
                                        echo '<b>';
                                        echo $config['site_title'];
                                        echo '</b> is currently offline.';
                                        $status = false;
                                    }
                                    else {
                                        $info = chr(6).chr(0).chr(255).chr(255).'info';
                                        fwrite($sock, $info);
                                        $data='';
                                        while (!feof($sock))$data .= fgets($sock, 1024);
                                        fclose($sock);
                                        echo 'Currently ';
                                        echo user_count_online();
                                        echo ' players are online.';
                                    }
                                }
?></td></tr>
</table>
<?php
$array = online_list();
if ($array) {
    ?>
   
    <table id="onlinelistTable" class="table table-striped table-hover">
        <tr class="yellow">
            <th>Name</th>
            <th>Level</th>
            <th>Vocation</th>
        </tr>
            <?php
            foreach ($array as $value) {
            echo '<tr>';
            echo '<td><a href="characterprofile.php?name='. $value['name'] .'">'. $value['name'] .'</a></td>';
            echo '<td>'. $value['level'] .'</td>';
            echo '<td>'. vocation_id_to_name($value['vocation']) .'</td>';
            echo '</tr>';
            }
            ?>
    </table>

<?php include 'layout/overall/footer.php';?>
