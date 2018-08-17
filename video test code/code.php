<?php
    define("SIMPLE_FAUCET",true);
    require_once('./lib/jsonRPCClient.php');
    require_once('./lib/simple_faucet.php');
    require_once('./lib/proxy_filter/proxy_filter.php');
    require_once('./config.php');
    if (!isset($config) || !class_exists("jsonRPCClient") || !class_exists("simple_faucet"))
            die("Faucet missing core components and/or config.");
    //create unique ID
    $sIP = $_SERVER['REMOTE_ADDR'];
    $oDB = @new mysqli($config["mysql_host"],$config["mysql_user"],$config["mysql_password"],$config["mysql_database"]);
    $hRes = $oDB->query("SELECT count(*) as iCnt FROM `codes` WHERE `ip`='".$sIP."'");
    $aRow = $hRes->fetch_array();
    if($aRow['iCnt']==0)
    {
        $sCode = getCode();
        $sISQL = 'INSERT INTO `codes` SET `ip`="'.$sIP.'",`code`="'.$sCode.'"';
        $oDB->query($sISQL);
    }
    else
    {
        $sCode = 'Coupon Code Created Only Once';
    }
    $aAnswer['code'] = $sCode;
    $aJSONAnswer = json_encode( $aAnswer );
    header( 'Content-type: application/json' );
    echo( $aJSONAnswer  );
    exit();
        
 

function getCode()
{
    $sChars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $sCode = "";
    for ($i = 0; $i < 10; $i++) {
        $sCode .= $sChars[mt_rand(0, strlen($sChars)-1)];
    }
    return $sCode;
}
?>
