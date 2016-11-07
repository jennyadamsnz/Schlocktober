<?php
namespace App\Controllers;

use App\Views\HomeView;

Class HomeController
{
	public function show(){

		$moviesuggestions = $this->getMovieSuggestFormData();

		$view = new HomeView(compact('moviesuggestions'));
		$view->render();
	}	

	public function getMovieSuggestFormData(){

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
		return $moviesuggestions;
	}
}

?>