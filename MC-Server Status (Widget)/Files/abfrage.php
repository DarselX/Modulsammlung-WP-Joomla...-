<?php 
foreach(array('Server' , 'Stats', 'StatsException') as $file) {
include sprintf('MCServerStatus/Minecraft/%s.php', $file);
}

$stats=\Minecraft\Stats::retrieve(new \Minecraft\Server("127.0.0.1:25565"));

$extCont = file_get_contents('http://checkip.dyndns.com/');
preg_match('/\b(?:\d{1,3}\.){3}\d{1,3}\b/',$extCont,$m);

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

$returnvalue=$online.";".$motd.";".$gameversion.";".$onlineplayers.";".$maxplayers.";".$m[0];
echo $returnvalue;
?>