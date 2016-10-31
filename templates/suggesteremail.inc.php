
<?php

$emailHeader = [
	'from' 		=>	'Schlocktoberfest<mailgun@'.$domain .'>', 
	'to' 		=>	"<".$moviesuggestions['email'].">", 
	'subject' 	=>	'Thanks for suggesting a movie ' .$moviesuggestions['title'], 
	];

?>

Hi there,

Thanks for your movie suggestion of <?php echo $moviesuggestions['title'];?> for Schlocktoberfest.

<?php if($moviesuggestions['checkbox']):?>
Thanks for also subscribing to our Newsletter
<?php endif;?>

From the Schlocktoberfest Team

