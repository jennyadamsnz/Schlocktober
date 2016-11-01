<?php

	use Mailgun\Mailgun;

Class SuggesterEmailView extends View {

	public function render(){
		extract($this->data);
		$this->sendEmail("templates/suggesteremail.inc.php");
	}

	public function sendEmail($templateFile){

		extract($this->data);

		//instantiate the SDK with your API credentials and define your domain. 
		$mg = new Mailgun("key-f804b2db4c84c11a57b453f2b57b8545");
		$domain = "sandboxa46b9f0a7da54d4ca6b871562240394a.mailgun.org";

		// open up a buffer to store details of template file

		ob_start();
		include $templateFile;

		$emailBody = ob_get_clean();

		# compose and send your message.
		$mg->sendMessage($domain, array('from'    => $emailHeader['from'],
		                                'to'      => $emailHeader['to'],
		                                'subject' => $emailHeader['subject'],
		                                'text'    => $emailBody
		                                ));
	}
}

?>