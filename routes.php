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

		if(isset($_SESSION['moviesuggestions'])){
			$moviesuggestions = $_SESSION['moviesuggestions'];
		}else {
			$moviesuggestions = [
				'title' => "",
				'email' => "",
				'checkbox' => "",
				'errors' => [
					'title' => "",
					'email' => "",
					'checkbox' => "",
					]

				];
			}
			require "classes/HomeView.php";
			$view = new HomeView(compact('moviesuggestions'));
			$view->render();
			break;

		case'about':

			require "classes/AboutView.php";
			$view = new AboutView();
			$view->render();

			break;

		case'moviesuggestions':

		$_SESSION['moviesuggestions']= null;

//moving form information in to movie suggestions variable

			$moviesuggestions = [
				'errors'=>[]
			];
			$expectedVariables = ['title','email','checkbox'];

			foreach ($expectedVariables as $variable) {
				//creating entries for error fields
				$moviesuggestions['errors'][$variable]="";

				//move all $_POST values into MovieSuggest array
				if(isset($_POST[$variable])){
					$moviesuggestions[$variable] = $_POST[$variable];
				}else {
					$moviesuggestions[$variable]="";
				}
			}

//form validation

	$errors = false;

		if(strlen($moviesuggestions['title']) === 0){
			$moviesuggestions['errors']['title']="Enter a title.";
			$errors = true;
		}

		if (! filter_var($moviesuggestions['email'], FILTER_VALIDATE_EMAIL)) {
			$moviesuggestions['errors']['email']="Enter a valid email.";
	    	$errors = true;
		}

		if($errors === true){

			$_SESSION['moviesuggestionsError'] = true;
			$_SESSION['moviesuggestions'] = $moviesuggestions;
			header("location:./");
		} 
		
		require "classes/SuggesterEmailView.php";
		$view = new SuggesterEmailView(compact('moviesuggestions'));
		$view->render();

		header("location:./?page=movie");
		break;	

		case 'movie':
			require "classes/MovieSuggestionsSuccessView.php";
			$view = new MovieSuggestionsSuccessView();
			$view->render();
		break;

		default:		
			echo "Error 404! Page not found!";
			break;
	}
