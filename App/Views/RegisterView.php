<?php 
namespace App\Views;

Class RegisterView extends View {

	 public function render (){
	 	$page = "register";
	 	$title = " Register new Account";
	 	include "templates/master.inc.php";

	 }

	 public function content(){
	 	include "templates/register.inc.php";

	 }
}

?>
