<?php

if(check_ios_fb()==false) {
	echo '<html><head><meta http-equiv="refresh" content="0; URL=https://www.facebook.com/bestapp/app_11111111111"></head></html>';
	die();
} else {
	echo '<html><head><meta http-equiv="refresh" content="0; URL=https://bestapp.example.com/"></head></html>';
}

function check_ios_fb() {
$uagent = $_SERVER['HTTP_USER_AGENT'];
$return = false;
if(preg_match('/Android/i',$uagent)) {
	$return = true;
	}
if(preg_match('/iPhone/i',$uagent)) {
	$return = true;
	}
if(preg_match('/iPad/i',$uagent)) {
	$return = true;
	}
return $return;
}
?>
