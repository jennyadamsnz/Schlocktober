<?php

	$page = ! isset($_GET['page'])? "home" : $_GET['page'];

		//code above replaces if else statement below://

	  // if(! isset($_GET['page'])){
	  // 	include "templates/home.inc.php";

	  // }else {
	  // 	include "templates/about.inc.php";
	  // }

	switch ($page) {
		case 'home':
			include "templates/home.inc.php";
			break;
		case'about':
			include "templates/about.inc.php";
			break;
		default:
			echo "Error 404! Page not found!";
			break;
	}
