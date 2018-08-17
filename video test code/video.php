<?php
define("SIMPLE_FAUCET",true);
require_once('./lib/jsonRPCClient.php');
require_once('./lib/simple_faucet.php');
require_once('./lib/proxy_filter/proxy_filter.php');
require_once('./config.php');
if (!isset($config) || !class_exists("jsonRPCClient") || !class_exists("simple_faucet"))
	die("Faucet missing core components and/or config.");
$config["template"] = "video";
$oDB = @new mysqli($config["mysql_host"],$config["mysql_user"],$config["mysql_password"],$config["mysql_database"]);
$hRes = $oDB->query("SELECT * FROM `video_ids`");
$aRow = $hRes->fetch_array();
$sVideoID = isset($aRow['yuoutube_video_id'])?$aRow['yuoutube_video_id']:'';
$config["video_id"] = $sVideoID;
$simple_faucet = new simple_faucet($config);
$simple_faucet->render();
?>