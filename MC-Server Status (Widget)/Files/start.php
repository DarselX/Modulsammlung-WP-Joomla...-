<?php
	$assds="";
	$assds = isset($_GET['cc']) ? $_GET['cc'] : 'null';
	
	$check=shell_exec('cc.sh');
	
	$check=str_replace("\n","",$check);
	$assds=str_replace("\n","",$assds);
		
	if((string)$check === (string)$assds)
	{
		shell_exec("sudo mcserver -s");
		echo "starting";
	}
	else
	{
		echo "none";
	}
?>