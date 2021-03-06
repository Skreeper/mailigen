<?php
/**
This Example shows how to webhookDelete using the MGAPI.php class and do some basic error checking.
**/
require_once 'inc/MGAPI.class.php';
require_once 'inc/config.inc.php'; //contains apikey

$api = new MGAPI($apikey);

$wid = $webhookId;

$retval = $api->webhookDelete($wid);

header("Content-Type: text/plain");
if ($api->errorCode){
	echo "Unable to load webhookDelete()!\n";
	echo "\tCode={$api->errorCode}\n";
	echo "\tMsg={$api->errorMessage}\n";
} else {
	echo "Webhook Deleted!\n";
}
