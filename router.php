<?php
	$url = $_SERVER['REDIRECT_URL'];
	$baseURL= '/';
	if($_SERVER["REQUEST_METHOD"]=="GET"){
		switch ($url){
			/*	Contoh Syntax
				case $baseURL."/frontpage":
					require_once "Controller/frontpageController.php";
					$frontpage = new FrontpageController();
					echo $frontpage ->start();
					break;
			*/
			default:
				echo '404 not found';
				break;
		}
	}
	else if($_SERVER["REQUEST_METHOD"]=="POST"){
		switch ($url){
			/*	Contoh Syntax
				case $baseURL."/signin":
					require_once "Controller/loginController.php";
					$log = new LoginController();
					echo $log->check();
					break;
			*/
			default:
				echo '404 not found';
				break;
		}
	}
?>