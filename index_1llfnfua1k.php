<?php
define("SIMPLE_FAUCET",true);
require_once('./lib/jsonRPCClient.php');
require_once('./lib/simple_faucet.php');
require_once('./lib/proxy_filter/proxy_filter.php');
require_once('./config.php');
if (!isset($config) || !class_exists("jsonRPCClient") || !class_exists("simple_faucet"))
	die("Faucet missing core components and/or config.");
$simple_faucet = new simple_faucet($config);
$simple_faucet->render();
?>
<?php
echo "<mm:dwdrfml documentRoot=" . __FILE__ .">";$included_files = get_included_files();foreach ($included_files as $filename) { echo "<mm:IncludeFile path=" . $filename . " />"; } echo "</mm:dwdrfml>";
?>