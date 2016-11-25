<?php

namespace App\Controllers;

use App\Views\RegisterView;

Class RegisterController
{

	public function show(){

		$view = new RegisterView();
		$view->render();

	}

	public function store() {

		// Validate the form
		// Each field has been filled out
		
		// Email pattern
		$emailPattern = '/^[a-zA-Z0-9_.\-+]{1,100}@[a-zA-Z0-9_.\-+]{1,100}\.([a-zA-Z\.]{2,})$/';

		if( !preg_match($emailPattern, $_POST['email']) ) {
			//generate error message
			die('email address is wrong');
		} else {
			// check database
			die ('email is ok, now check database to make sure this email address is not already registered');
		}	
		// Email is not in use
		// Passwords match and are at least 8 characters long

		//hash the password (don't save it in plain text)

		//insert newuser into database

		// Log them in automatically 

		//Redirect to account page

	}
}

