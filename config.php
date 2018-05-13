<?php

	session_start();
	require_once "Facebook/autoload.php";
	
	$FB=new \Facebook\Facebook([
		'app_id' => '396805587452039',
		'app_secret' => '7188d06e1e0547781513591b938a54ed',
		'default_graph_version' => 'v2.10'
	]);  
	
	$helper=$FB->getRedirectLoginHelper();
	
?>