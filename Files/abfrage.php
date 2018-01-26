<?php 
foreach(array('Server' , 'Stats', 'StatsException') as $file) {
include sprintf('MCServerStatus/Minecraft/%s.php', $file);
}

$stats=\Minecraft\Stats::retrieve(new \Minecraft\Server("127.0.0.1:25565"));

$online="";
$motd="";
$gameversion="";
$onlineplayers="";
$maxplayers="";

if($stats->is_online)
{
$online="Online";
$motd=$stats->motd;
$gameversion=$stats->game_version;
$onlineplayers=$stats->online_players;
$maxplayers=$stats->max_players;
}

$returnvalue=$online.";".$motd.";".$gameversion.";".$onlineplayers.";".$maxplayers;
echo $returnvalue;
?>