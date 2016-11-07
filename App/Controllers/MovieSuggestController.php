<?php
namespace App\Controllers;

use App\Views\SuggesterEmailView;
use App\Views\MovieSuggestionsSuccessView;

Class MovieSuggestController
{
	protected $moviesuggestions = [
				'errors'=>[]
			];

	public function __construct(){
		$this->moviesuggestions = [
							'errors'=>[]
		];
	}

	public function resetSessionData(){
		$_SESSION['moviesuggestions']= null;

	}

	public function getFormData(){

		//moving form information in to movie suggestions variable


			$expectedVariables = ['title','email','checkbox'];

			foreach ($expectedVariables as $variable) {
				//creating entries for error fields
				$this->moviesuggestions['errors'][$variable]="";

				//move all $_POST values into MovieSuggest array
				if(isset($_POST[$variable])){
					$this->moviesuggestions[$variable] = $_POST[$variable];
				}else {
					$this->moviesuggestions[$variable]="";
				}
			}
	}
	
	public function isFormValid(){
		//form validation
		
		$errors = false;

		if(strlen($this->moviesuggestions['title']) === 0){
			$this->moviesuggestions['errors']['title']="Enter a title.";
			$errors = true;
		}

		if (! filter_var($this->moviesuggestions['email'], FILTER_VALIDATE_EMAIL)) {
			$this->moviesuggestions['errors']['email']="Enter a valid email.";
	    	$errors = true;
		}
		return $errors;
	}

	public function show(){

		$this->resetSessionData();

		$this->getFormData();


		if($this->isFormValid() === true){

			$_SESSION['moviesuggestions'] = $this->moviesuggestions;
			header("location:./");
			return;
		} 
		
		//redirect back to success page
		header("location:./?page=movie");

		// send email using mailgun API
		$view = new SuggesterEmailView(compact('moviesuggestions'));
		$view->render();

	}
	public function generateSuccessPage(){
		$view = new MovieSuggestionsSuccessView();
		$view->render();
	}
}

?>