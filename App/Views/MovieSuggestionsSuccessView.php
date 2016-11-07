<?php

namespace App\Views;

Class MovieSuggestionsSuccessView extends View {

	public function render(){
		$page = "MovieSuggestionsSuccess";
		$title = " Movie Suggestion";
		include "templates/master.inc.php";
	}

	public function content(){
		include "templates/moviesuggestionssuccess.inc.php";
	}
}


?>