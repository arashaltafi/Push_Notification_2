<?php

if(isset($_POST["nId"]))
{

	$regId =$_POST["nId"];
	$nType =$_POST["notification_type"];

	// INCLUDE YOUR FCM FILE
	include_once 'fcm.php';    

	$arrNotification["priority"] = "HIGH";				
	$arrNotification["body"] = "PHP Push Notification Description";
	$arrNotification["title"] = "PHP Push Notification Title";
	$arrNotification["sound"] = "default";
	$arrNotification["notification_id"] = "1";
	$arrNotification["type"] = 1;
	$arrNotification["image"] = "https://arashaltafi.ir/arash.jpg";

	$fcm = new FCM();
	$result = $fcm->send_notification($regId, $arrNotification, $nType);
	print_r($result);
}

?>