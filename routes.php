<?php

namespace App\Controllers;


	$page = ! isset($_GET['page'])? "home" : $_GET['page'];

		//code above replaces if else statement below://

	  // if(! isset($_GET['page'])){
	  // 	include "templates/home.inc.php";

	  // }else {
	  // 	include "templates/about.inc.php";
	  // }

	switch ($page) {
		case 'home':

			$controller = new HomeController();
			$controller->show();

			break;

		case'about':

			$controller = new AboutController();
			$controller->show();

			break;

		case'movies':

			$controller = new MoviesController();
			$controller->showAll();

			break;			

		case'featuredmovie':

			$controller = new MoviesController();
			$controller->showfeaturedMovie();

			break;			

		case'moviesuggestions':

			$controller = new MovieSuggestController();
			$controller->show();

		break;	

		case 'movie':
			$controller = new MovieSuggestController();
			$controller->generateSuccessPage();
		break;

		case 'merchandise':
			$controller = new MerchandiseController();
			$controller->showAll();

		break;

		default:		
			echo "Error 404! Page not found!";
			break;
	}
